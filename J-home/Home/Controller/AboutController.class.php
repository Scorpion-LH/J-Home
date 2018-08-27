<?php
namespace Home\Controller;
use Think\Controller;
class AboutController extends Controller {
	public function about(){
		$listNum = count($_SESSION['cart']);
		$this->assign("listNum",$listNum);
    	$this->display();
    }
	public function map(){
		$Map = M('map');
		$map = $Map->select();
		$this->assign('map',$map);
		$listNum = count($_SESSION['cart']);
		$this->assign("listNum",$listNum);
    	$this->display();
    }
	public function join(){
		$Join = M('join');
	    $xiaoshou = $Join->where('leibie="销售"')->select();
	    $jishu = $Join->where('leibie="技术"')->select();
	    $wuliu = $Join->where('leibie="物流"')->select();
	    $xingzheng = $Join->where('leibie="行政"')->select();
		$this->assign('xiaoshou',$xiaoshou);
		$this->assign('jishu',$jishu);
		$this->assign('wuliu',$wuliu);
		$this->assign('xingzheng',$xingzheng);
		$listNum = count($_SESSION['cart']);
		$this->assign("listNum",$listNum);
    	$this->display();
    }
	public function question(){
		$listNum = count($_SESSION['cart']);
		$this->assign("listNum",$listNum);
    	$this->display();
    }
}
?>