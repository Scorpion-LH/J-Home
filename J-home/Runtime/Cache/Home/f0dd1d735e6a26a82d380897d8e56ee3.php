<?php if (!defined('THINK_PATH')) exit();?><title>简家简介-简家家居生活</title>
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

<div class="about">
	<div class="container">
		<div class="row about-box about-one">
			<div class="col-xs-12">
				<h5>关于简家</h5>
				<h2>来简家，定制你的家</h2>
				<img src="/myBS/Public/img/about/about01.png" class="img-responsive" />
			</div>
		</div>
		<div class="row about-box">
			<div class="col-xs-12 col-sm-6 about-box-left">
				<span>经营理念</span>
				<h3>企业愿景和经营理念</h3>
				<p>“为大众创造更加美好的日常生活”，这是简家的愿景。我们的经营理念是“提供种类繁多、美观实用、老百姓买得起的家居用品”。</p><br />
				<p>简家家居的所有家具都可以是订制的，您可以根据我们提供的产品样式及参数参考，告诉我们您实际的家具需求，简家当全力满足，快来您的私人定制吧！</p>
			</div>
			<div class="col-xs-12 col-sm-6">
				<embed src="http://player.youku.com/player.php/sid/XNjIxMjQwNjcy/v.swf" width="480" height="400" type="application/x-shockwave-flash"> </embed>
			</div>
		</div>
		<div class="row about-box">
			<div class="col-xs-12 col-sm-6 about-box-left">
				<span>可持续发展</span>
				<h3>投资未来</h3>
				<p>“为大众创造更加美好的日常生活”，这是简家的愿景。简家集团的主要财务原则是依靠我们自己的资源发展壮大。换而言之，我们量入为出。这样我们就能做到为未来进行长期投资。</p><br />
				<p>简家的愿景是我们发展壮大的基石。我们想确保简家更加亲民，这样就有更多的人能够打造更好的日常居家生活。我们的大部分利润会重新投入到我们现有的和新开张的简家商场，投资于产品设计和可持续解决方案，以及用以继续为我们的顾客降低产品价格。</p><br />
			</div>
			<div class="col-xs-12 col-sm-6">
				<img data-original="/myBS/Public/img/about/about02.jpg"/>
			</div>
		</div>
		<div class="row about-box">
			<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				<img data-original="/myBS/Public/img/about/about07.png"/>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				<img data-original="/myBS/Public/img/about/about03.jpg"/>
				<b>质优价廉产品</b>
				为了得到大众的认可，我们的产品必须做到质优价廉。我们设计产品时，始终将顾客的需求放在心里。
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				<img data-original="/myBS/Public/img/about/about04.jpg"/>
				<b>益于人类，益于地球</b>
				我们持续发展壮大的同时，致力于对地球家园和大众带来全面的积极影响。
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				<img data-original="/myBS/Public/img/about/about05.jpg"/>
				<b>简家与员工共成长</b>
				员工是我们持续发展的关键。我们把每个人都当成有发展潜力的人才。
			</div>
		</div>
		<div class="row about-box">
			<div class="col-xs-12 col-sm-6 about-box-left">
				<span>居家生活</span>
				<h3>一切从这里开始</h3>
				<p>“家”不仅仅是一个地方，更是一种感觉。这种感觉就好像自己身处全世界最舒适的地方。因此，我们所做的一切都要从了解人们的居家生活开始。</p><br />
				<p>每年，我们都会拜访世界各地的家庭，希望了解人们梦想拥有什么样的居家生活。然后，我们将他们的需求与供应商的能力联系起来，打造出能够让日常生活更美好的全新解决方案。</p><br />
			</div>
			<div class="col-xs-12 col-sm-6">
				<img data-original="/myBS/Public/img/about/about08.jpg"/>
			</div>
		</div>
		<div class="row about-box">
			<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				<img data-original="/myBS/Public/img/about/about09.png"/>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				<img data-original="/myBS/Public/img/about/about10.jpg"/>
				<b>和孩子一起生活</b>
				我们理解，有时带孩子就像玩杂耍一样。在简家，我们十分乐于通过任何一个小细节给家庭带来帮助。
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				<img data-original="/myBS/Public/img/about/about11.jpg"/>
				<b>小空间</b>
				到2030年，10人中会有7人将住在城市里。随着居住空间不断缩小，我们开始更加重视打造巧妙有趣的解决方案，使其既节省空间又节省花费。
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				<img data-original="/myBS/Public/img/about/about12.jpg"/>
				<b>整洁收纳</b>
				生活水平提高意味着身边的东西越来越多。我们将储物件打造得更加实用、有趣而又实惠，使得小家居空间里的生活更加轻松愉快。
			</div>
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
	$(".navbar-nav li:eq(0)").addClass("active");
})
</script>

</body>
</html>