<?php
namespace Home\Controller;
use Think\Controller;
class ListController extends Controller {
	public function lglist(){
		$room=$_GET['room'];
        $Class = M('class');
		$banner = $Class->where("id='$room'")->find();
        $this->assign('banner',$banner);
		$data=$Class->select();
		$list=array();
		foreach($data as $arr){
			$list[$arr['pid']][]=$arr;//重新整理数据排序。
		}
		$this->assign("list",$list);
		$listNum = count($_SESSION['cart']);
		$this->assign("listNum",$listNum);
    	$this->display();
    }
	public function countnum(){
		$title = $_POST['title'];
		$titleNum = count($title);
		for($i=0;$i<$titleNum;$i++){
			$myTitleNum[] = M('goods')->where(array('btitle'=>$title[$i]))->count();
		};
		$this -> ajaxReturn($myTitleNum);
	}
	public function mdlist(){
		$title = $_GET['title']; //洗脸池
		$mdlist = M('list');
		$goods = M('goods');
		$Class = M('class');
		$list = $mdlist->where("title='$title'")->find();
		$good = $goods->where("title='$title'")->select();
		$pid = $Class->where("title='$title' AND level=3")->getField('pid');  
		$class = $Class->where("id='$pid'")->find();
		$topClass = $Class->where("id='$class[pid]'")->find();
		$this->assign('list',$list);
		$this->assign('good',$good);
		$this->assign('class',$class);
		$this->assign('topClass',$topClass);
		$listNum = count($_SESSION['cart']);
		$this->assign("listNum",$listNum);
		$this->display();
    }
	public function search(){
		$data = I("get.search");
		$goods = M('goods');
		$where['name'] = array('like',"%$data%");
		$where['_logic'] = 'OR';
		$where['sname'] = array('like',"%$data%");
		$good = $goods->where($where)->select();
		$this->assign('data',$data);
		$this->assign('good',$good);
		$listNum = count($_SESSION['cart']);
		$this->assign("listNum",$listNum);
		$this->display('mdlist');
	}
}
?>