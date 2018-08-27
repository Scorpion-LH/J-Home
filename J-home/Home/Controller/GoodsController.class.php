<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {
	
	public function good(){
		$Good = M('goods');
		$Class = M('class');
		$GoodImg = M('goods_img');
		$id = $_GET['id'];
		$good = $Good->where("id='$id'")->find();
		$title = $Good->where("id='$id'")->getField('title');
		$pid = $Class->where("title='$title'")->getField('pid');
		$class = $Class->where("id='$pid'")->find();
		$topClass = $Class->where("id='$class[pid]'")->find();
		$subClass = $Class->where("pid='$pid'")->field('title,img')->select();
		//根据产品id查找图片表的数据
//		$goodID = $Good->where("name='$name'")->getField('id');
		//获取除了id以外的其他字段
		$Gimg = $GoodImg->where("id='$id'")->field('id',true)->select();
		$this->assign('good',$good);
		$this->assign('class',$class);
		$this->assign('topClass',$topClass);
		$this->assign('gimg',$Gimg);
		$this->assign('subclass',$subClass);
		$gg1_text = $Good->where("id='$id'")->getField('guige1_text');
		$gg2_text = $Good->where("id='$id'")->getField('guige2_text');
		$gg3_text = $Good->where("id='$id'")->getField('guige3_text');
		$option1 = explode(",", $gg1_text);
		$option2 = explode(",", $gg2_text);
		$option3 = explode(",", $gg3_text);
		$this->assign('gg2_text',$gg2_text);
		$this->assign('gg3_text',$gg3_text);
		$this->assign('option1',$option1);
		$this->assign('option2',$option2);
		$this->assign('option3',$option3);
		$listNum = count($_SESSION['cart']);
		$this->assign("listNum",$listNum);
    	$this->display();
    }
	//清单页面
	public function bill(){
		$listNum = count($_SESSION['cart']);
		$this->assign("bill",$_SESSION['cart']);
		$this->assign("listNum",$listNum);
		$Class = M('class');
		$Good = M('goods');
		$kt_condition['id'] = array(array('gt',44),array('lt',80));
		$keting = $Class->where($kt_condition)->field('title')->select();
		$ws_condition['id'] = array(array('gt',79),array('lt',122));
		$woshi = $Class->where($ws_condition)->field('title')->select();
		$cf_condition['id'] = array(array('gt',121),array('lt',149));
		$chufang = $Class->where($cf_condition)->field('title')->select();
		$ct_condition['id'] = array(array('gt',148),array('lt',175));
		$canting = $Class->where($ct_condition)->field('title')->select();
		$ys_condition['id'] = array(array('gt',174),array('lt',198));
		$yushi = $Class->where($ys_condition)->field('title')->select();
		//两张表的双重遍历循环
		foreach($keting as $k => $v){
	        $keting[$k]['good'] = $Good -> where(array('title' => $v['title'],'index_show' => '1'))->order('id desc') -> select();
		}
		foreach($woshi as $k => $v){
	        $woshi[$k]['good'] = $Good -> where(array('title' => $v['title'],'index_show' => '1'))->order('id desc') -> select();
		}
		foreach($chufang as $k => $v){
	        $chufang[$k]['good'] = $Good -> where(array('title' => $v['title'],'index_show' => '1'))->order('id desc') -> select();
		}
		foreach($canting as $k => $v){
	        $canting[$k]['good'] = $Good -> where(array('title' => $v['title'],'index_show' => '1'))->order('id desc') -> select();
		}
		foreach($yushi as $k => $v){
	        $yushi[$k]['good'] = $Good -> where(array('title' => $v['title'],'index_show' => '1'))->order('id desc') -> select();
		}
		$this->assign("keting",$keting);
		$this->assign("woshi",$woshi);
		$this->assign("chufang",$chufang);
		$this->assign("canting",$canting);
		$this->assign("yushi",$yushi);
    	$this->display();
    }
	//愿望清单
	public function show_bill(){
//		$data = I('post.');
		$id = I('post.id');
		$title = I('post.title');
		$name = I('post.name');
		$sname = I('post.sname');
		$price = I('post.price');
		$huohao = I('post.huohao');
		$gg1 = I('post.gg1');
		$gg2 = I('post.gg2');
		$gg3 = I('post.gg3');
		$select1 = I('post.select1');
		$select2 = I('post.select2');
		$select3 = I('post.select3');
		$num = I('post.num');
		$badge = I('post.badge');
		$badge = $badge+1;
		$this->cart($id,$title,$name,$sname,$price,$huohao,$gg1,$gg2,$gg3,$select1,$select2,$select3,$num);
        $this->ajaxReturn($badge);
	}
	//构造清单
	public function cart($id,$title,$name,$sname,$price,$huohao,$gg1,$gg2,$gg3,$select1,$select2,$select3,$num){
		//如果cart的session不存在则创建并存入
		if(!isset($_SESSION['cart'])){
			$_SESSION['cart'] = array();
			$item = array();
			$item['id'] = $id;
			$item['title'] = $title;
			$item['name'] = $name;
			$item['sname'] = $sname;
			$item['price'] = $price;
			$item['huohao'] = $huohao;
			$item['guige1_name'] = $gg1;
			$item['guige2_name'] = $gg2;
			$item['guige3_name'] = $gg3;
			$item['select1'] = $select1;
			$item['select2'] = $select2;
			$item['select3'] = $select3;
			$item['num'] = $num;
			$_SESSION['cart'][$id] = $item;
		}else {
			//如果cart存在但有相同的产品那就数量加一
			if(isset($_SESSION['cart'][$id])) {
				$_SESSION['cart'][$id]['num'] += $num;
				$data = $_SESSION['cart'];
			}else {
				//如果是新产品就创建并存入cart
				$item = array();
				$item['id'] = $id;
				$item['title'] = $title;
				$item['name'] = $name;
				$item['sname'] = $sname;
				$item['price'] = $price;
				$item['huohao'] = $huohao;
				$item['guige1_name'] = $gg1;
				$item['guige2_name'] = $gg2;
				$item['guige3_name'] = $gg3;
				$item['select1'] = $select1;
				$item['select2'] = $select2;
				$item['select3'] = $select3;
				$item['num'] = $num;
				$_SESSION['cart'][$id] = $item;
			}
		}
	}
	//删除商品
	public function cart_del($id){
		unset($_SESSION['cart'][$id]);
		$listNum = count($_SESSION['cart']);
		$this->assign("bill",$_SESSION['cart']);
		$this->assign("listNum",$listNum);
//      $this->display('Goods:bill');
		$this->redirect('bill');
	}
	//提交预约
	public function submit_cart(){
		$Order = M("order");
		$OrderGoods = M("order_goods");
		$data['user_name'] = I('post.name');
		$data['user_sex'] = I('post.sex');
		$data['user_tel'] = I('post.tel');
		$data['user_email'] = I('post.email');
		$data['user_address'] = I('post.address');
		$data['user_time'] = date("Y-m-d H:i:s");
		$data['order_id'] = date("mdHis").rand(1000,9999);
		$Order->add($data);
		$cartNum = count($_SESSION['cart']);
		$cart = $_SESSION['cart'];
		foreach($cart as $k=>$v){
		    $map = array();
			$map['order_id'] = $data['order_id'];
			$map['k'] = $k;
			$map['title'] = $v['title'];
			$map['name'] = $v['name'];
			$map['sname'] = $v['sname'];
			$map['huohao'] = $v['huohao'];
			$map['price'] = $v['price'];
			$map['num'] = $v['num'];
			$map['guige1_name'] = $v['guige1_name'];
			$map['guige2_name'] = $v['guige2_name'];
			$map['guige3_name'] = $v['guige3_name'];
			$map['guige1_text'] = $v['select1'];
			$map['guige2_text'] = $v['select2'];
			$map['guige3_text'] = $v['select3'];
			$OrderGoods->add($map);
		};
		session('cart',null);
		$this->ajaxReturn($data);
	}
}
?>