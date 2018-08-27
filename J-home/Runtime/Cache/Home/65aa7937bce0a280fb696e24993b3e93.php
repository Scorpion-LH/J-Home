<?php if (!defined('THINK_PATH')) exit();?><title>常见问题-简家家居生活</title>
<!doctype html>
<html lang="en">
<head>
	<title>简家家居生活</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<meta name="Keywords" content="简家,家居,生活"/>
	<meta name="Description" content="简家家居生活"/>
	<link rel="icon" href="/myBS/Public/img/J-home-logo-08.png"/>
	<link rel="stylesheet" href="/myBS/Public/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/myBS/Public/css/reset.css" />
	<link rel="stylesheet" href="/myBS/Public/css/style.css" />
	<link rel="stylesheet" type="text/css" href="/myBS/Public/css/font-awesome.min.css"/>
	<style type="text/css">
	@media print{
		input{border: 0;width: 35px;}
		.buy-table tr td:last-child{display: none;}
		.btn{display: none;}
		.print-show{display: block;margin-top: 50px;}
	}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php echo U('Index/index');?>"><img src="/myBS/Public/img/J-home-logo-08.png"  alt="简家家居" class="img-responsive" /></a>
	    </div>
		<form action="<?php echo U('List/search');?>" method="get" class="search-pos visible-xs">
	      <div class="input-group" style="width: 150px;">
		    <input type="text" name="search" class="form-control" placeholder="搜索产品...">
		    <span class="input-group-btn">
		    	<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
		    </span>
		  </div>
      	</form>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
	      <ul class="nav navbar-nav">
	        <li><a href="<?php echo U('Index/index');?>">首页</a></li>
	        <li><a href="<?php echo U('About/about');?>">简家简介</a></li>
	        <li><a href="<?php echo U('Design/design');?>">简设创意</a></li>
	        <li><a href="<?php echo U('About/map');?>">简体验馆</a></li>
	        <li><a href="<?php echo U('About/join');?>">人才招聘</a></li>
	        <li><a href="<?php echo U('About/question');?>">常见问题</a></li>
		  </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li class="hidden-xs hidden-sm">
		      <form action="<?php echo U('List/search');?>" method="get">
			      <div class="input-group" style="width: 200px;">
				    <input type="text" name="search" class="form-control" placeholder="搜索产品...">
				    <span class="input-group-btn">
				    	<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
				    </span>
				  </div>
		      </form>
	        </li>
	        <li><a href="<?php echo U('Goods/bill');?>">愿望清单<span class="badge badge1"><?php echo ($listNum); ?></span></a></li>
	      </ul>
	    </div>
	  </div>
	</nav>


<div class="question">
	<div class="container">
		<div class="row">
			<div class="cjwt-box">
				<img src="/myBS/Public/img/about/cjwt1.jpg" class="cjwt" alt="常见问题" />
				<h1>常见问题</h1>
			</div>
		</div>
		<div class="row question-box col-xs-10 col-sm-10 col-md-8 col-lg-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-2 col-lg-offset-2">
			<h4>关于购物准备：</h4>
			<ul>
				<li>1、	我可以网络购物吗?</li>
				<p>简家暂时无法提供网络订购或电话订购等销售方式，如果您需要购买简家产品，我们欢迎您来商场亲身体验简家的不同之处，拥有愉快的购物经历。不过，目前简家正在国外开展网上销售的试验，计划将来在更多的国家推出电子商务。</p>
				<li>2、	怎样知道简单家商场的营业时间及地址？</li>
				<p>简家暂时无法提供网络订购或电话订购等销售方式，如果您需要购买简家产品，我们欢迎您来商场亲身体验简家的不同之处，拥有愉快的购物经历。不过，目前简家正在国外开展网上销售的试验，计划将来在更多的国家推出电子商务。</p>
				<li>3、	如何确认产品的库存?</li>
				<p>简家暂时无法提供网络订购或电话订购等销售方式，如果您需要购买简家产品，我们欢迎您来商场亲身体验简家的不同之处，拥有愉快的购物经历。不过，目前简家正在国外开展网上销售的试验，计划将来在更多的国家推出电子商务。</p>
				<li>4、	为什么产品有时会缺货？</li>
				<p>简家暂时无法提供网络订购或电话订购等销售方式，如果您需要购买简家产品，我们欢迎您来商场亲身体验简家的不同之处，拥有愉快的购物经历。不过，目前简家正在国外开展网上销售的试验，计划将来在更多的国家推出电子商务。</p>
				<li>5、	简家支持哪些付款方式？</li>
				<p>简家暂时无法提供网络订购或电话订购等销售方式，如果您需要购买简家产品，我们欢迎您来商场亲身体验简家的不同之处，拥有愉快的购物经历。不过，目前简家正在国外开展网上销售的试验，计划将来在更多的国家推出电子商务。</p>
				<li>6、	简家提供送货服务吗？</li>
				<p>简家暂时无法提供网络订购或电话订购等销售方式，如果您需要购买简家产品，我们欢迎您来商场亲身体验简家的不同之处，拥有愉快的购物经历。不过，目前简家正在国外开展网上销售的试验，计划将来在更多的国家推出电子商务。</p>
				<li>7、	简家提供组装服务吗？</li>
				<p>简家暂时无法提供网络订购或电话订购等销售方式，如果您需要购买简家产品，我们欢迎您来商场亲身体验简家的不同之处，拥有愉快的购物经历。不过，目前简家正在国外开展网上销售的试验，计划将来在更多的国家推出电子商务。</p>
			</ul>
			<h4 style="margin-top: 40px;">关于产品退换：</h4>
			<ul>
				<li>1、	我可以退换产品吗？</li>
				<p>简家暂时无法提供网络订购或电话订购等销售方式，如果您需要购买简家产品，我们欢迎您来商场亲身体验简家的不同之处，拥有愉快的购物经历。不过，目前简家正在国外开展网上销售的试验，计划将来在更多的国家推出电子商务。</p>
				<li>2、	我的产品有质量问题，怎么办？</li>
				<p>简家暂时无法提供网络订购或电话订购等销售方式，如果您需要购买简家产品，我们欢迎您来商场亲身体验简家的不同之处，拥有愉快的购物经历。不过，目前简家正在国外开展网上销售的试验，计划将来在更多的国家推出电子商务。</p>
				<li>3、	我的产品没有组装图纸，怎么办？</li>
				<p>简家暂时无法提供网络订购或电话订购等销售方式，如果您需要购买简家产品，我们欢迎您来商场亲身体验简家的不同之处，拥有愉快的购物经历。不过，目前简家正在国外开展网上销售的试验，计划将来在更多的国家推出电子商务。</p>
				<li>4、	我购买的产品缺少配件，怎么办？</li>
				<p>简家暂时无法提供网络订购或电话订购等销售方式，如果您需要购买简家产品，我们欢迎您来商场亲身体验简家的不同之处，拥有愉快的购物经历。不过，目前简家正在国外开展网上销售的试验，计划将来在更多的国家推出电子商务。</p>
				<li>5、	我的产品退货后，如何查询银行卡退款信息？</li>
				<p>简家暂时无法提供网络订购或电话订购等销售方式，如果您需要购买简家产品，我们欢迎您来商场亲身体验简家的不同之处，拥有愉快的购物经历。不过，目前简家正在国外开展网上销售的试验，计划将来在更多的国家推出电子商务。</p>
			</ul>
		</div>
	</div>
</div>

	
	<div class="footer">
		<div class="row row1">
			<div class="col-xs-12 col-sm-4">
				<h4>关于我们</h4>
				<p><i class="glyphicon glyphicon-map-marker"></i>  珠海市静安区南京西路1601号35楼3501-3508室</p>
				<p><i class="icon-phone-sign"></i>  020-528-8549</p>
				<p><i class="icon-envelope"></i>  jianjia@firefox.com</p>
			</div>
			<div class="col-xs-12 col-sm-2 col-sm-offset-1">
				<h4>导航</h4>
				<p><a href="">公司简介</a></p>
				<p><a href="">产品介绍</a></p>
				<p><a href="">人才招聘</a></p>
				<p><a href="">常见问题</a></p>
			</div>
			<div class="col-xs-12 col-sm-3 col-sm-offset-1">
				<h4>信息</h4>
				<p>隐私政策</p>
				<p>预约须知</p>
				<p>《关于简家家居家具定制相关条例》</p>
			</div>
		</div>
		<div class="row row2">
			<div class="col-xs-12 col-sm-6">
			© 2015-2016 简家家居官方网站
			</div>
			<div class="col-xs-12 col-sm-6">
			粤ICP备08018225号
			</div>
		</div>
	</div>
	<div class="side">
		<div class="phone">
			<i class="icon-phone icon-3x"></i>
			<div class="phone-slide">
				热线电话：<br />
				020-528-8549
				<div class="phone-slide-radius"></div>
			</div>
		</div>
		<div class="kefu">
			<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1549989653&site=qq&menu=yes">
			<i class="icon-user icon-3x"></i>
			<div class="kefu-slide">
				在线客服				
				<div class="kefu-slide-radius"></div>
			</div>
			</a>
		</div>
		<div class="btn btn-backtop" style="display: none;">
		    <i class="icon-chevron-up icon-2x"></i>
		</div>
	</div>
	<script src="/myBS/Public/js/jquery-2.2.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/myBS/Public/js/jquery.lazyload.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/myBS/Public/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=0E2YhwPFVSH6lAyctGxQYTGGY79jZzjq"></script>
	<script type="text/javascript">
		$(function(){
			$("img").lazyload({effect: "fadeIn"});
			
			$('.btn-backtop').click(function(){
				$('body,html').animate({scrollTop:0},500);
			});
			$(window).scroll(function(){
				if(document.body.scrollTop < 300){
					$('.btn-backtop').fadeOut(200);
				}else{
					$('.btn-backtop').fadeIn(200);
				}
			})
			
			$("img").addClass("img-responsive");
		})
	</script>


<script type="text/javascript">
$(document).ready(function(){
	$(".navbar-nav li:eq(4)").addClass("active");
	$(".question-box li").click(function(){
		$(this).next('p').slideToggle();
	})
});

</script>

</body>
</html>