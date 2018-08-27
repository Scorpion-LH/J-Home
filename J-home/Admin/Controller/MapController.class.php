<?php
namespace Admin\Controller;
use Think\Controller;
class MapController extends CommonController {
	public function map(){
		$Map = M('map');
        $list = $Map->select();
		$this->assign('map',$list);// 赋值数据集
    	$this->display();
    }
	public function Mapadd(){
    	$this->display();
	}
	public function Mapupdate(){
		$id = $_GET['id'];
		$data = M('map')->where("id='$id'")->find();
		$this->assign('list',$data);
    	$this->display();
	}
	public function add_map() {
		$data = I('post.');
		M('map')->data($data)->add();
		$this->redirect('map',0);
	}
	public function update_map(){
		$data = I('post.');
		M('map')->where("id='$data[id]'")->save($data);
		$this->redirect('map',0);
	}
	public function map_del(){
		$id = $_GET['id'];
		M('map')->where("id='$id'")->delete();
		$this->redirect('map',0);
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