<?php
namespace Home\Controller;
use Think\Controller;
class DesignController extends Controller {
	public function design(){
		$Design = M('design');
		$design = $Design->select();
		$this->assign('design',$design);
		$listNum = count($_SESSION['cart']);
		$this->assign("listNum",$listNum);
    	$this->display();
    }
	public function design_list(){
		$designFm = M('design')->field("img")->select();
		$this->ajaxReturn($designFm);
	}
	public function designIn(){
		$listNum = count($_SESSION['cart']);
		$this->assign("listNum",$listNum);
    	$this->display();
    }
	public function show_design(){
        $id=$_GET['id'];
        $Design=M('design');
        $data=$Design->find($id);
        $data1=$Design->find($id+1);
        $data2=$Design->find($id-1);
		if (!$data2)//如果不存在的话
		{
	    	$data2['title'] = '没有上一篇了';
		};
        $this->assign('design',$data);
        $this->assign('design1',$data1);
        $this->assign('design2',$data2);
        $this->display('designIn');
    }
}
?>