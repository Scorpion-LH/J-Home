<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>简家家居生活-后台管理</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" href="/myBS/Public/img/J-home-logo-08.png"/>
		<link rel="stylesheet" href="/myBS/Public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/myBS/Public/css/site.min.css">
    <link rel="stylesheet" href="/myBS/Public/css/admin.css">
    <link rel="stylesheet" type="text/css" href="/myBS/Public/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&subset=latin,latin-ext" rel="stylesheet">
    <script type="text/javascript" src="/myBS/Public/js/site.min.js"></script>
    <script src="/myBS/Public/ueditor/ueditor.config.js" type="text/javascript" charset="utf-8"></script>
    <script src="/myBS/Public/ueditor/ueditor.all.js" type="text/javascript" charset="utf-8"></script>
  </head>
  <body>
    <!--nav-->
    <nav role="navigation" class="navbar navbar-custom">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button data-target="#bs-content-row-navbar-collapse-5" data-toggle="collapse" class="navbar-toggle" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand"><img src="/myBS/Public/img/J-home-logo-08.png"  alt="简家家居" class="img-responsive" style="width: 100px; margin-top: -8px;"/><span>后台管理</span></a>
          </div>
          <div id="bs-content-row-navbar-collapse-5" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
            	<li class="active"><a href="/myBS" target="_blank">网站首页</a></li>
              <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">你好：<?php echo ($username); ?><b class="caret"></b></a>
                <ul role="menu" class="dropdown-menu">
                  <li class="disabled"><a href="<?php echo U('Index/outLogin');?>">退出登录</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    <!--header-->
    <div class="container-fluid">
    <!--documents-->
        <div class="row row-offcanvas row-offcanvas-left">
          <div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
            <ul class="list-group panel">
                <li class="list-group-item"><i class="glyphicon glyphicon-th-list"></i> <b>操作菜单</b></li>
                <li class="list-group-item"><a href="<?php echo U('Good/good');?>"><i class="glyphicon glyphicon-th-large"></i>产品展示管理</a></li>
                <li class="list-group-item"><a href="<?php echo U('News/news');?>"><i class="glyphicon glyphicon-book"></i>文章管理</a></li>
                <li class="list-group-item"><a href="<?php echo U('Mjoin/Mjoin');?>"><i class="glyphicon glyphicon-user"></i>招聘管理</a></li>
                <li class="list-group-item"><a href="<?php echo U('Map/map');?>"><i class="glyphicon glyphicon-map-marker"></i>简馆地址管理</a></li>
                <li class="list-group-item"><a href="<?php echo U('Order/order');?>"><i class="glyphicon glyphicon-shopping-cart"></i>订单管理</a></li>
                <li class="list-group-item"><a href="<?php echo U('Banner/banner');?>"><i class="glyphicon glyphicon-bullhorn"></i>广告管理</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-9 content">
            <div class="M-join panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="glyphicon glyphicon-chevron-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> 招聘管理</h3>
              </div>
              <div class="panel-body">
              	<form action="<?php echo U('Map/add_map');?>" method="post" class="form-horizontal"> 
              		<div class="form-group">
	              		<label for="name" class="control-label col-md-1">名称：</label>
	              		<div class="col-md-5">
	              			<input type="text" name="name" class="form-control" id="name" value="" required="required"/>
	              		</div>
              		</div><hr />
              		<div class="form-group">
	              		<label for="address" class="control-label col-md-1">地址：</label>
	              		<div class="col-md-7">
	              			<input type="text" name="address" class="form-control" id="address" value="" required="required"/>
	              		</div>
              		</div><hr />
              		<div class="form-group">
	              		<label for="telephone" class="control-label col-md-1" style="padding-left: 0;">联系电话：</label>
	              		<div class="col-md-3">
	              			<input type="text" name="telephone" class="form-control" id="telephone" value="" required="required"/>
	              		</div>
              		</div><hr />
              		<div class="form-group">
	              		<label for="time" class="control-label col-md-1" style="padding-left: 0;">营业时间：</label>
	              		<div class="col-md-3">
	              			<input type="text" name="time" class="form-control" id="time" value="" required="required"/>
	              		</div>
              		</div><hr />
									<input type="text" name="id" value="" hidden="hidden" />
              		<input type="submit" class="btn btn-info btn-lg" value="添加"/>
              	</form>
              </div>
            </div>
        </div><!-- content -->
      </div>
    
    </div>
    <div class="mask">
			<div class="mask-box">
				<i class="icon-spinner icon-spin icon-2x"></i>&nbsp;&nbsp;提交中，请稍候...
			</div>
		</div>
    <script src="/myBS/Public/js/jquery-2.2.2.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        var ue = UE.getEditor('container',{
        	toolbars: [
					  ['fullscreen', 'source', 'undo','|', 'redo','bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript','|','fontsize','simpleupload','insertimage','|','emotion','spechars'],
				    ['removeformat','formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc','horizontal','|','pasteplain','lineheight','autotypeset']
					], 
				  initialFrameHeight:300,
				  enterTag:'' ,
				  saveInterval: 5000000
        });
        
        
			  $(":submit").click(function(){
	  			if($("#name").val() != "" && $("#address").val() != "" && $("#telephone").val() != "" && $("#time").val() != ""){
	  				$screenHeight = $(window).height();
			    	$screenWidth = $(window).width();
			    	$(".mask").css({"width":$screenWidth,"height":$screenWidth});
			    	$(".mask").show();
	  			}
		    });
    </script>
  </body>
</html>