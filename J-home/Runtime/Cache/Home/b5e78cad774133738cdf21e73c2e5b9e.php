<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<title>客厅-简家家居生活</title>
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

<style type="text/css">
.glyphicon.glyphicon-search {
	padding: 0;
}
</style>
<nav class="navbar navbar-default index-nav navbar-fixed-top" role="navigation" hidden="hidden">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
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
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo U('List/lglist',array('room'=>'1'));?>">客厅</a></li>
        <li><a href="<?php echo U('List/lglist',array('room'=>'2'));?>">卧室</a></li>
        <li><a href="<?php echo U('List/lglist',array('room'=>'3'));?>">厨房</a></li>
        <li><a href="<?php echo U('List/lglist',array('room'=>'4'));?>">餐厅</a></li>
        <li><a href="<?php echo U('List/lglist',array('room'=>'5'));?>">浴室</a></li>
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
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="list">
	<div class="container">
		<div class="row banner-box">
			<img src="<?php echo ($banner["img"]); ?>" alt="" class="img-responsive"/>
		</div>
		<div class="row list-box">
			<?php if(is_array($list[$banner['id']])): $i = 0; $__LIST__ = $list[$banner['id']];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="list-in col-xs-12">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<img data-original="<?php echo ($vo["img"]); ?>" class="img-responsive"/>
				</div>
				<div class="list-title col-xs-12 col-sm-12 col-md-6">
				<span class="title"><?php echo ($vo["title"]); ?></span><span class="titleNum"></span><br />
					<?php if(is_array($list[$vo['id']])): $i = 0; $__LIST__ = $list[$vo['id']];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><div class="col-xs-6 list-con">
					<a href="<?php echo U('List/mdlist',array('title'=>$vo2['title']));?>"><?php echo ($vo2["title"]); ?></a>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
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
	var win = $(window);
    var doc = $(document);
    var iNav = $(".index-nav");
      	
    win.scroll(function(){
    	if(doc.scrollTop()>450){
    		iNav.fadeIn(100);
    	}else{
    		iNav.fadeOut(100);
    	}
    })
	
	var title = new Array();//定义数组  
    $('.title').each(function () {  
        title.push($(this).text())  
    }); 
	console.log(title);
	
	$.ajax({
		type:"post",
		url:"<?php echo U('List/countnum');?>",
		async:true,
//		dataType:"text",
		data: {title:title},
		cache: false,
		success:function(data){
			for(var i=0;i<data.length;i++){
				$(".titleNum").eq(i).text('('+data[i]+')');
			}
		},
		error:function(){
			console.log("分类数量统计有误");
		}
	});
	
	var inHeight = $(".list-in").height()-50;
	
    $(window).scroll(function(){
    	$(".list-in").each(function(){
	        if($(window).scrollTop()+$(window).height()>$(this).offset().top+inHeight){
	            $(this).children(".list-title").animate({"left":"0","opacity":1},function(){
	            	$(this).children(".list-con").slideDown();
	            });
	        }
    	})
    });
});

</script>

</body>
</html>