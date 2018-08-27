<?php
namespace Admin\Controller;
use Think\Controller;
class MjoinController extends CommonController {
	public function Mjoin(){
		$Join = M('join');
		$count  = $Join->count();// 查询满足要求的总记录数
        $Page   = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(10)
		$Page->setConfig('prev',  '<span aria-hidden="true">上一页</span>');//上一页
		$Page->setConfig('next',  '<span aria-hidden="true">下一页</span>');//下一页
		$Page->setConfig('first', '<span aria-hidden="true">首页</span>');//第一页
		$Page->setConfig('last',  '<span aria-hidden="true">尾页</span>');//最后一页
		//$Page->setConfig('theme','');设置你想显示的按钮，%XXXX%含义参照图示
		$Page->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%' );
        $show  = $Page->show('Mjoin');// 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $Join->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('Mjoin',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
    	$this->display();
    }
	public function Mjoinadd(){
    	$this->display();
	}
	public function Mjoinupdate(){
		$id = $_GET['id'];
		$data = M('join')->where("id='$id'")->find();
		$this->assign('list',$data);
    	$this->display();
	}
	public function add_join() {
		$data = I('post.');
		$Join = M('join');
		$Join->data($data)->add();
		$this->redirect('Mjoin',0);
	}
	public function update_join(){
		$data = I('post.');
		M('join')->where("id='$data[id]'")->save($data);
		$this->redirect('Mjoin',0);
	}
	public function join_del(){
		$id = $_GET['id'];
		$Join = M('join');
		$Join->where("id='$id'")->delete();
		$this->redirect('Mjoin',0);
	}
	//搜索
	public function search(){
		$data = I("get.search");
		$Join = M('join');
		$where['leibie'] = array('like',"%$data%");
		$where['_logic'] = 'OR';
		$where['gangwei'] = array('like',"%$data%");
		$list = $Join->where($where)->order('id desc')->select();
        $this->assign('Mjoin',$list);// 赋值数据集
		$this->display('Mjoin');
	}
}
?>