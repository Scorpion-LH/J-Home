<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends CommonController {
	public function order(){
		$Order = M("order");
		$OrderGoods = M("order_goods");
		$count  = $Order->count();// 查询满足要求的总记录数
        $Page   = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(5)
		//$Page->setConfig()设置样式
		$Page->setConfig('prev',  '<span aria-hidden="true">上一页</span>');//上一页
		$Page->setConfig('next',  '<span aria-hidden="true">下一页</span>');//下一页
		$Page->setConfig('first', '<span aria-hidden="true">首页</span>');//第一页
		$Page->setConfig('last',  '<span aria-hidden="true">尾页</span>');//最后一页
		//$Page->setConfig('theme','');设置你想显示的按钮，%XX%含义参照图示
		$Page->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%' );
        $show  = $Page->show('news');// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $user = $Order->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('page',$show);// 赋值分页输出
		//两张表的双重遍历循环
		foreach($user as $k => $v){
	        $user[$k]['good'] = $OrderGoods -> where(array('order_id' => $v['order_id'])) -> select();
		}
		$this -> assign('user',$user);
		$this -> display();
	}
	//删除订单
	public function order_del(){
		$id = $_GET['id'];
		$Oid = M('order')->where("id='$id'")->getField("order_id");
		M('order')->where("id='$id'")->delete();
		M('order_goods')->where("order_id='$Oid'")->delete();
		$this->redirect('order',0);
	}
	//搜索
	public function search(){
		$data = I("get.search");
		$Order = M("order");
		$OrderGoods = M("order_goods");
		$where['user_name'] = array('like',"%$data%");
		$where['_logic'] = 'OR';
		$where['order_id'] = array('like',"%$data%");
		$user = $Order->where($where)->order('id desc')->select();
		//两张表的双重遍历循环
		foreach($user as $k => $v){
	        $user[$k]['good'] = $OrderGoods -> where(array('order_id' => $v['order_id'])) -> select();
		}
		$this -> assign('user',$user);
		$this->display('order');
	}
}
?>