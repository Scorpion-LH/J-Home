<?php
namespace Admin\Controller;
use Think\Controller;
class GoodController extends CommonController {
	public function good(){
		$Good = M("goods");
		$Class = M('class');
		$count  = $Good->count();// 查询满足要求的总记录数
        $Page   = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(10)
		//$Page->setConfig()设置样式
		$Page->setConfig('prev',  '<span aria-hidden="true">上一页</span>');//上一页
		$Page->setConfig('next',  '<span aria-hidden="true">下一页</span>');//下一页
		$Page->setConfig('first', '<span aria-hidden="true">首页</span>');//第一页
		$Page->setConfig('last',  '<span aria-hidden="true">尾页</span>');//最后一页
		//$Page->setConfig('theme','');设置你想显示的按钮，%XX%含义参照图示
		$Page->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%' );
        $show  = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $goods = $Good->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('page',$show);// 赋值分页输出
        $this->assign('goods',$goods);// 赋值数据集
		$this->display();
    }
	public function get_title(){
		dump(I("post."));
		$this->display("good");
	}
	//删除产品
	public function good_del(){
		$id = $_GET['id'];
		M('goods')->where("id='$id'")->delete();
		$this->redirect('good',0);
	}
	//修改产品页面
	public function goodupdate(){
		$id = $_GET['id'];
		$Good = M("goods");
		$Class = M('class');
		$Gimg = M('goods_img')->where("id='$id'")->find();
		$data = $Good->where("id='$id'")->find();
		$title = $data['title'];
		$pid = $Class->where("title='$title'")->getField('pid');
		$allClass = $Class->where("pid='$pid'")->select();
		$this->assign('list',$data);
		$this->assign('allClass',$allClass);
		$this->assign('gimg',$Gimg);
    	$this->display();
	}
	//保存产品修改
	public function update_good(){
		$Pinyin = new \Org\Util\ChinesePinyin();
		$Class = M("class");
		$data = I('post.');
		$title = I('post.title');
		//获取三级标题的父id
		$pid = $Class->where("title='$title'")->getField("pid");
		//根据pid的值获取到父级的title名称
		$p_titleName = $Class->where("id='$pid'")->getField("title");
		//根据第二级的title获取到pid
		$top_pid = $Class->where("title='$p_titleName'")->getField("pid");
		//根据pid获取到房间名
		$roomName = $Class->where("id='$top_pid'")->getField("title");
		//将汉字转为拼音
		$stitle = $Pinyin->TransformWithoutTone($title);
		$btitle = $Pinyin->TransformWithoutTone($p_titleName);
		$room = $Pinyin->TransformWithoutTone($roomName);
		//产品的名字
		$name = $Pinyin->TransformWithoutTone(I('post.name'));
		$arr = array_filter($_FILES['pic']['name']); //过滤空值
		if($_FILES['thumbnail']['name'] || !empty($arr)){ //thumbnail或者pic两者其中之一存在
			$upload = new \Think\Upload();// 实例化上传类
		    $upload->maxSize   =     3145728;// 设置附件上传大小
		    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		    $upload->rootPath  =     './Public/img/good/'; // 设置附件上传根目录
		    $upload->savePath  =     $room.'/'.$btitle.'/'.$stitle.'/'.$name.'/' ; // 设置附件上传（子）目录
		    $upload->autoSub   =     false;   //不自动新建子目录
	        $upload->replace   = 	 true;	  //若同名则覆盖
	        $upload->savename  = 	 array('uniqid','');
//	        $upload->saveName = date("Y-m-d").'_'.mt_rand();
		    // 上传文件 
		    $info   =   $upload->uploadOne($_FILES['thumbnail']); //保存单个上传文件，获取上传信息
		    $in   =   $upload->upload(array($_FILES['pic'])); 
		    if(!$info && !$in) {// 上传错误提示错误信息
		        $this->error($upload->getError());
		    }else{// 上传成功
				$str = "http://localhost/myBS/Public/img/good/";
				if($info){
			   		$data1['thumbnail']= $str.$info['savepath'].$info['savename']; //字符串拼接保存文件路径
			    } 
				if($in[0]['savename']){
					$data2['pic1']= $str.$in[0]['savepath'].$in[0]['savename'];  //字符串拼接保存文件路径
				};
				if($in[1]['savename']){
			   		$data2['pic2']= $str.$in[1]['savepath'].$in[1]['savename'];
				};
				if($in[2]['savename']){
			  		$data2['pic3']= $str.$in[2]['savepath'].$in[2]['savename']; 
			    };
				if($in[3]['savename']){
			 	    $data2['pic4']= $str.$in[3]['savepath'].$in[3]['savename']; 
				};	
				if($in[4]['savename']){
				    $data2['pic5']= $str.$in[4]['savepath'].$in[4]['savename']; 
				};	
				if($in[5]['savename']){
			 	    $data2['pic6']= $str.$in[5]['savepath'].$in[5]['savename'];  
				};	
				if($in[6]['savename']){
			 		$data2['pic7']= $str.$in[6]['savepath'].$in[6]['savename'];  
				};
		    	M('goods')->where("id='$data[id]'")->save($data1);
				M('goods_img')->where("id='$data[id]'")->save($data2);
		        $this->redirect('good',0);
		    }
		}else{
			M('goods')->where("id='$data[id]'")->save($data);
		    $this->redirect('good',0);
		}
		
	}
	//产品添加页面
	public function goodadd(){
		if(IS_POST){//如果有post请求
			$pid['pid'] = I('post.pid','addslashes');
			$Class = M('class')->where($pid)->select();
			$opt = '<option>--请选择分类--</option>';
			foreach($Class as $key=>$val){
			    $opt .= "<option value='{$val['id']}'>{$val['title']}</option>";
			}
			echo json_encode($opt);
		}else{
			$room = M('class')->where("pid='0'")->select();
			$this->assign('room',$room);
			$this->display();
		}
	}
	public function add_good(){
		$Pinyin = new \Org\Util\ChinesePinyin();
		$Class = M('class');
		$Good = M('goods');
		$data1 = I('post.');
		//获取三级标题的id
		$titleID = I('post.stitle');
		//根据id获取到title名称
		$titleName = $Class->where("id='$titleID'")->getField("title");  
		//根据id获取到pid的值
		$pid = $Class->where("id='$titleID'")->getField("pid");	
		//根据pid的值获取到父级的title名称
		$p_titleName = $Class->where("id='$pid'")->getField("title");
		//根据第二级的title获取到pid
		$top_pid = $Class->where("id='$pid'")->getField("pid");   
		//根据pid获取到房间名
		$roomName = $Class->where("id='$top_pid'")->getField("title");
		$data1['title'] = $titleName;
		$data1['btitle'] = $p_titleName;
		$data1['room'] = $roomName;
		//将汉字转为拼音
		$stitle = $Pinyin->TransformWithoutTone($titleName);
		$btitle = $Pinyin->TransformWithoutTone($p_titleName);
		$room = $Pinyin->TransformWithoutTone($roomName);
		//产品的名字
		$name = $Pinyin->TransformWithoutTone(I('post.name'));
		$upload = new \Think\Upload();// 实例化上传类
	    $upload->maxSize   =     3145728;// 设置附件上传大小
	    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	    $upload->rootPath  =     './Public/img/good/'; // 设置附件上传根目录
	    $upload->savePath  =     $room.'/'.$btitle.'/'.$stitle.'/'.$name.'/' ; // 设置附件上传（子）目录
	    $upload->autoSub   =     false;   //不自动新建子目录
        $upload->replace   = 	 true;	  //若同名则覆盖
        $upload->savename  = 	 array('uniqid','');  //名字唯一
	    // 上传文件 
	    $info   =   $upload->uploadOne($_FILES['thumbnail']); //保存单个上传文件，获取上传信息
	    $in   =   $upload->upload(array($_FILES['pic']));  //保存多个上传文件，获取上传信息
	    if(!$info && !$in) {// 上传错误提示错误信息
	        $this->error($upload->getError());
	    }else{// 上传成功
			$str = "http://localhost/myBS/Public/img/good/";
			if($info){
		   		$data1['thumbnail']= $str.$info['savepath'].$info['savename']; //字符串拼接保存文件路径
		    } 
			if($in[0]['savename']){
				$data2['pic1']= $str.$in[0]['savepath'].$in[0]['savename'];  //字符串拼接保存文件路径
			};
			if($in[1]['savename']){
		   		$data2['pic2']= $str.$in[1]['savepath'].$in[1]['savename'];
			};
			if($in[2]['savename']){
		  		$data2['pic3']= $str.$in[2]['savepath'].$in[2]['savename']; 
		    };
			if($in[3]['savename']){
		 	    $data2['pic4']= $str.$in[3]['savepath'].$in[3]['savename']; 
			};	
			if($in[4]['savename']){
			    $data2['pic5']= $str.$in[4]['savepath'].$in[4]['savename']; 
			};	
			if($in[5]['savename']){
		 	    $data2['pic6']= $str.$in[5]['savepath'].$in[5]['savename'];  
			};	
			if($in[6]['savename']){
		 		$data2['pic7']= $str.$in[6]['savepath'].$in[6]['savename'];  
			};
	    	$result = M('goods')->add($data1);
			if($result){  //如果添加成功，返回新数据的id值
				$data2['id'] = $result;
				M('goods_img')->add($data2);
			}
	        $this->redirect('good',0);
	    }
	}
	
	
	//判断是否首页显示
	public function check(){
		$show['index_show'] = I('post.index_show');
		$id = I('post.id');
		M("goods")->where("id='$id'")->save($show);
		$this->ajaxReturn($data);
	}
	//搜索产品
	public function search(){
		$data = I("get.search");
		$Good = M("goods");
		$Class = M('class');
		$where['name'] = array('like',"%$data%");
		$where['_logic'] = 'OR';
		$where['title'] = array('like',"%$data%");
		$where['btitle'] = array('like',"%$data%");
		$where['room'] = array('like',"%$data%");
		$goods = $Good->where($where)->select();
		$this->assign('goods',$goods);// 赋值数据集
		$this->display('good');
	}
}
?>