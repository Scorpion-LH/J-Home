<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<title>简家家居生活</title>
	<link rel="icon" href="/myBS/Public/img/J-home-logo-08.png"/>
	<link rel="stylesheet" href="/myBS/Public/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="/myBS/Public/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="/myBS/Public/css/reset.css" />
	<link rel="stylesheet" href="/myBS/Public/css/style.css" />
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
	<nav class="navbar navbar-default" role="navigation">
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
	
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
	      <ul class="nav navbar-nav">
	        <li><a href="<?php echo U('About/about');?>">简家简介</a></li>
	        <li><a href="<?php echo U('Design/design');?>">简设创意</a></li>
	        <li><a href="<?php echo U('About/map');?>">简体验馆</a></li>
	        <li><a href="<?php echo U('About/join');?>">人才招聘</a></li>
	        <li><a href="<?php echo U('About/question');?>">常见问题</a></li>
		  </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="<?php echo U('Goods/bill');?>">购物清单<span class="badge"><?php echo ($listNum); ?></span></a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>