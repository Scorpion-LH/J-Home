<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
	public function __construct()  
	{
       //此方法是检查是否登陆而且session是否存在，如不是则提示跳转到登陆页
         parent::__construct();
         if (!$_SESSION['username'])
          {
         	 $this->redirect('Index/login',null,2,'您还未登陆，正在跳转到登陆页...');
         }else {
         	$this->assign('username',$_SESSION['username']);
         }
	}
}
?>