<?php
namespace Admin\Controller;
use Think\Controller;
class BannerController extends CommonController {
	public function banner(){
		$Banner = M("banner")->select();
		$this->assign('banner',$Banner);
		$this->display();
    }
	//修改广告页面
	public function bannerupdate(){
		$id = $_GET['id'];
		$Bimg = M('banner')->where("id='$id'")->find();
		$this->assign('bimg',$Bimg);
    	$this->display();
	}
	//保存广告修改
	public function update_banner(){
		$Pinyin = new \Org\Util\ChinesePinyin();
		$Banner = M("banner");
		$id = I('post.id');
		$Position = I('post.position');
		//将汉字转为拼音
		$positionName = $Pinyin->TransformWithoutTone($Position);
		$arr = array_filter($_FILES['pic']['name']); //过滤空值
		if(!empty($arr)){ //若pic不为空
			$upload = new \Think\Upload();// 实例化上传类
		    $upload->maxSize   =     3145728;// 设置附件上传大小
		    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		    $upload->rootPath  =     './Public/img/banner/'; // 设置附件上传根目录
		    $upload->savePath  =     $positionName.'/' ; // 设置附件上传（子）目录
		    $upload->autoSub   =     false;   //不自动新建子目录
	        $upload->replace   = 	 true;	  //若同名则覆盖
	        $upload->savename  = 	 array('uniqid','');
		    // 上传文件 
		    $in   =   $upload->upload(array($_FILES['pic'])); 
		    if(!$in) {// 上传错误提示错误信息
		        $this->error($upload->getError());
		    }else{// 上传成功
				$str = "http://localhost/myBS/Public/img/banner/";
				if($in[0]['savename']){
					$data['img1']= $str.$in[0]['savepath'].$in[0]['savename'];  //字符串拼接保存文件路径
				};
				if($in[1]['savename']){
			   		$data['img2']= $str.$in[1]['savepath'].$in[1]['savename'];
				};
				if($in[2]['savename']){
			  		$data['img3']= $str.$in[2]['savepath'].$in[2]['savename']; 
			    };
				M('banner')->where("id='$id'")->save($data);
		        $this->redirect('banner',0);
		    }
		}else{
		    $this->redirect('banner',0);
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
		$top_pid = $Class->where("title='$p_titleName'")->getField("pid");
		//根据pid获取到房间名
		$roomName = $Class->where("id='$top_pid'")->getField("title");
		$data1['title'] = $titleName;
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
		$goods = $Good->where($where)->select();
		$title = $Good->getField('title');
		$pid = $Class->where("title='$title'")->getField('pid');
		$class = $Class->where("id='$pid'")->find();
		$topClass = $Class->where("id='$class[pid]'")->find();
		$this->assign('goods',$goods);// 赋值数据集
		$this->assign('class',$class);
		$this->assign('topClass',$topClass);
		$this->display('good');
	}
}
?>