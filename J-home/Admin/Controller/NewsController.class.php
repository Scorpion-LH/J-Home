<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends CommonController {
	public function news(){
	    $Design = M('design')->select();
        $count  = M('design')->count();// 查询满足要求的总记录数
        $Page   = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(10)
		//$Page->setConfig()设置样式
		$Page->setConfig('prev',  '<span aria-hidden="true">上一页</span>');//上一页
		$Page->setConfig('next',  '<span aria-hidden="true">下一页</span>');//下一页
		$Page->setConfig('first', '<span aria-hidden="true">首页</span>');//第一页
		$Page->setConfig('last',  '<span aria-hidden="true">尾页</span>');//最后一页
		//$Page->setConfig('theme','');设置你想显示的按钮，%XX%含义参照图示
		$Page->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%' );
        $show  = $Page->show('news');// 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = M('design')->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('Mnews',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
    	$this->display();
    }
	public function del_news(){
		$id = $_GET['id'];
		M('design')->where("id='$id'")->delete();
		$this->redirect('news',0);
	}
	public function newsupdate(){
		$id = $_GET['id'];
		$data = M('design')->where("id='$id'")->find();
		$this->assign('list',$data);
    	$this->display();
	}
	public function update_news(){
		$data = I('post.');
		if($_FILES['img']['name']){
			$upload = new \Think\Upload();// 实例化上传类
		    $upload->maxSize   =     3145728;// 设置附件上传大小
		    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		    $upload->rootPath  =     './Public/img/news/'; // 设置附件上传根目录
		    $upload->savePath  =     ''; // 设置附件上传（子）目录
		    $upload->autoSub   =     false;   //不自动新建子目录
	        $upload->replace = true;//若同名则覆盖
	        $upload->saveName = date("Y-m-d").'_'.mt_rand();
		    // 上传文件 
		    $info   =   $upload->uploadOne($_FILES['img']); //保存单个上传文件，获取上传信息
		    if(!$info) {// 上传错误提示错误信息
		        $this->error($upload->getError());
		    }else{// 上传成功
				$str = "http://localhost/myBS/Public/img/news/";
			    $data['img']= $str.$info['savepath'].$info['savename'];  //字符串拼接保存文件路径
		    	M('design')->where("id='$data[id]'")->save($data);
		        $this->redirect('news',0);
		    }
		}else{
			M('design')->where("id='$data[id]'")->save($data);
		    $this->redirect('news',0);
		}
	}
	public function newsadd(){
    	$this->display();
	}
	public function add_news() {
		$data = I('post.');
		$upload = new \Think\Upload();// 实例化上传类
	    $upload->maxSize   =     3145728;// 设置附件上传大小
	    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	    $upload->rootPath  =     './Public/img/news/'; // 设置附件上传根目录
	    $upload->savePath  =     ''; // 设置附件上传（子）目录
	    $upload->autoSub   =     false;   //不自动新建子目录
        $upload->replace = true;//若同名则覆盖
        $upload->saveName = date("Y-m-d").'_'.mt_rand();
	    // 上传文件 
	    $info   =   $upload->uploadOne($_FILES['img']); //保存单个上传文件，获取上传信息
	    if(!$info) {// 上传错误提示错误信息
	        $this->error($upload->getError());
	    }else{// 上传成功
			$str = "http://localhost/myBS/Public/img/news/";
		    $data['img']= $str.$info['savepath'].$info['savename'];  //字符串拼接保存文件路径
		    $data['time']=date("Y-m-d");
	    	M('design')->data($data)->add();
	        $this->redirect('news',0);
	    }
	}
	//搜索
	public function search(){
		$data = I("get.search");
		$list = M('design')->where("time='$data'")->order('time desc')->select();
        $this->assign('Mnews',$list);// 赋值数据集
		$this->display('news');
	}
}
?>