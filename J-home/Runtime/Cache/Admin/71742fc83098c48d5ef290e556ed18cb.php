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
                <!--<li class="list-group-item"><input type="text" class="form-control search-query" placeholder="Search Something"></li>-->
                <li class="list-group-item"><a href="<?php echo U('Good/good');?>"><i class="glyphicon glyphicon-th-large"></i>产品展示管理</a></li>
                <li class="list-group-item"><a href="<?php echo U('News/news');?>"><i class="glyphicon glyphicon-book"></i>文章管理</a></li>
                <li class="list-group-item"><a href="<?php echo U('Mjoin/Mjoin');?>"><i class="glyphicon glyphicon-user"></i>招聘管理</a></li>
                <li class="list-group-item"><a href="<?php echo U('Map/map');?>"><i class="glyphicon glyphicon-map-marker"></i>简馆地址管理</a></li>
                <li class="list-group-item"><a href="<?php echo U('Order/order');?>"><i class="glyphicon glyphicon-shopping-cart"></i>订单管理</a></li>
                <li class="list-group-item"><a href="<?php echo U('Banner/banner');?>"><i class="glyphicon glyphicon-bullhorn"></i>广告管理</a></li>
                <!--<li class="list-group-item"><a href="forms.html"><i class="glyphicon glyphicon-cog"></i>修改密码</a></li>-->
            </ul>
          </div>
          <div class="col-xs-12 col-sm-9 content">
            <div class="M-join panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="glyphicon glyphicon-chevron-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> 招聘管理</h3>
              </div>
              <div class="panel-body">
              	<form action="<?php echo U('Mjoin/update_join');?>" method="post" class="form-horizontal">
              		<div class="form-group">
	              		<label for="" class="control-label col-md-1">类别：</label>
	              		<div class="col-md-2">
		              		<select name="leibie" class="form-control">
		              			<option value="<?php echo ($list["leibie"]); ?>"><?php echo ($list["leibie"]); ?></option>
		              			<option value="销售">销售</option>
		              			<option value="技术">技术</option>
		              			<option value="物流">物流</option>
		              			<option value="行政">行政</option>
		              		</select>
	              		</div>
              		</div><hr />
              		<div class="form-group">
	              		<label for="gw" class="control-label col-md-1" style="padding-left: 0;">岗位名称：</label>
	              		<div class="col-md-3">
	              			<input type="text" name="gangwei" class="form-control" id="gw" value="<?php echo ($list["gangwei"]); ?>" required="required"/>
	              		</div>
              		</div><hr />
              		<label for="">描述/要求：</label>
              			<script id="container" name="yaoqiu" type="text/plain">
												<?php echo (htmlspecialchars_decode($list["yaoqiu"])); ?>
										</script><br />
									<input type="text" name="id" value="<?php echo ($list["id"]); ?>" hidden="hidden" />
              		<input type="submit" class="btn btn-info btn-lg" value="修改"/>
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
			    $screenHeight = $(window).height();
		    	$screenWidth = $(window).width();
		    	$(".mask").css({"width":$screenWidth,"height":$screenWidth});
		    	$(".mask").show();
		    })
					  
    </script>
  </body>
</html>