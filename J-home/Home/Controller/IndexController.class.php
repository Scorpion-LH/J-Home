<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index(){
		$Class = M('class');
		$Good = M('goods');
		$Banner = M('banner')->where("position='大屏'")->find();
		$Banner_kt = M('banner')->where("position='客厅'")->find();
		$Banner_ws = M('banner')->where("position='卧室'")->find();
		$Banner_cf = M('banner')->where("position='厨房'")->find();
		$Banner_ct = M('banner')->where("position='餐厅'")->find();
		$Banner_ys = M('banner')->where("position='浴室'")->find();
		$data=$Class->select();
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
		$list=array();
		foreach($data as $arr){
			$list[$arr['pid']][]=$arr;//重新整理数据排序。
		}
		
		$keting = $this->mymArrsort($keting,"id");
		$woshi = $this->mymArrsort($woshi,"id");
		$chufang = $this->mymArrsort($chufang,"id");
		$canting = $this->mymArrsort($canting,"id");
		$yushi = $this->mymArrsort($yushi,"id");
		
		$this->assign("list",$list);
		$this->assign("keting",$keting);
		$this->assign("woshi",$woshi);
		$this->assign("chufang",$chufang);
		$this->assign("canting",$canting);
		$this->assign("yushi",$yushi);
		$this->assign("banner",$Banner);
		$this->assign("banner_kt",$Banner_kt);
		$this->assign("banner_ws",$Banner_ws);
		$this->assign("banner_cf",$Banner_cf);
		$this->assign("banner_ct",$Banner_ct);
		$this->assign("banner_ys",$Banner_ys);
		$listNum = count($_SESSION['cart']);
		$this->assign("listNum",$listNum);
    	$this->display();
    }


    /**
     * 根据指定字段排序二维数组，保留原有键值(降序)
     * $arr @输入二维数组
     * $var @要排序的字段名
     * return array
     */
    function mymArrsort($arr,$var){
        $tmp=array();
        $rst=array();
        foreach($arr as $key=>$trim){
            $tmp[$key]=$trim[$var];
        }
        arsort($tmp);
        $i=0;
        foreach($tmp as $key1=>$trim1){
            $rst[$i]=$arr[$key1];
            $i=$i+1;
        }
        return $rst;
    }
}
?>