<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index(){
		$username = $_SESSION['username'];
		if(!$username){
			$this->error('请先登录', U('Index/login'),2);
		}else{
			$this->assign('username',$username);
    		$this->display();
		}
    }
	public function login(){
    	$this->display();
    }
	//退出登陆
    public function outLogin(){
        session('username',null);
        $this->display('index:login');
    }
	
	public function admin_login() {
		$Admin = M("admin");
		$username = I('post.username');
        $password = I('post.password');
		$password = md5($password);
        $code = I('post.code');
        $id = '';
        $verify = new\Think\Verify();
        if (!$verify->check($code, $id)) {
            $this->error('验证码错误', U('Index/login'),2);
        } else {
            $condition = array(
                'name' => $username,
                'password' => $password
            );
            $data = $Admin->where($condition)->find();
            if ($data) {
            	session('username',$username);
            	$this->redirect("index");
            } else {
                $this->error('用户名或者密码错误', U('Index/login'),2);
            }
        }
	}
	public function verify(){
        $config =    array(
            'fontSize'    =>    20,    // 验证码字体大小
            'length'      =>   4,     // 验证码位数
            'useNoise'    =>    false, // 关闭验证码杂点
            'useCurve'=>false,
        );
        $Verify =   new \Think\Verify($config);
        $Verify->entry();
    }
}
?>