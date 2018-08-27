<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
	public function head(){
		$listNum = count($_SESSION['cart']);
		$this->assign("listNum",$listNum);
    	$this->display();
    }
	public function foot(){
    	$this->display();
    }
}
?>