<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>简家家居生活-后台管理</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" href="/myBS/Public/img/J-home-logo-08.png"/>
    <link rel="stylesheet" href="/myBS/Public/css/site.min.css">
    <link rel="stylesheet" href="/myBS/Public/css/admin.css">
    <script type="text/javascript" src="/myBS/Public/js/site.min.js"></script>
    <style type="text/css">
    	.tooltip {position: relative;}
			#tooltip img {height: 200px;}
    </style>
  </head>
  <body>
    <!--nav-->
    <nav role="navigation" class="navbar navbar-custom">
        <div class="container-fluid">
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
          <div class="M-banner col-xs-12 col-sm-9 content">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">
                	<a href="javascript:void(0);" class="toggle-sidebar"><span class="glyphicon glyphicon-chevron-left" data-toggle="offcanvas" title="Maximize Panel"></span>
                	</a>广告管理</h3>
              </div>
              <div class="panel-body">
              	<div class="table-responsive">
              	<table class="table table-hover">
              			<thead>
	                  <tr>
	                  	<th>位置</th>
	                  	<th>图片1</th>
	                  	<th>图片2</th>
	                  	<th>图片3</th>
	                  	<th>操作</th>
	                  </tr>
	                  </thead>
	                  <?php if(is_array($banner)): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
	                  	<td hidden="hidden"><span><?php echo ($v["id"]); ?></span></td>
	                  	<td><?php echo ($v["position"]); ?></td>
	                  	<td>
	                  		<a href="<?php echo ($v["img1"]); ?>" class="tooltip" title="<?php echo ($v["position"]); ?>">
	                  			<img src="<?php echo ($v["img1"]); ?>"/>
	                  		</a>
	                  	</td>
	                  	<td>
	                  		<a href="<?php echo ($v["img2"]); ?>" class="tooltip" title="<?php echo ($v["position"]); ?>">
	                  			<img src="<?php echo ($v["img2"]); ?>"/>
	                  		</a>
	                  	</td>
	                  	<td>
	                  		<a href="<?php echo ($v["img3"]); ?>" class="tooltip" title="<?php echo ($v["position"]); ?>">
	                  			<img src="<?php echo ($v["img3"]); ?>"/>
	                  		</a>
	                  	</td>
	                  	<td><a href="<?php echo U('Banner/bannerupdate',array('id'=>$v['id']));?>" class="btn btn-primary">修改</a>
	                  	</td>
	                  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
	                </table>
	              </div>
	             </div>
              </div>
            </div>
        </div><!-- content -->
        <footer>
        	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
        </footer>
      </div>
      
    <script src="/myBS/Public/js/jquery-2.2.2.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
       $(function(){
				var x = 10;
        var y = 20;
        $("a.tooltip").mouseover(function(e){
            this.myTitle = this.title;
            this.title = "";
            var imgTitle = this.myTitle? "<br/>" + this.myTitle : "";
            var tooltip = "<div id='tooltip'><img src='"+this.href+"' alt='预览图'>"+imgTitle+"</div>";
            $("body").append(tooltip);
        }).mouseout(function(){
            this.title = this.myTitle;
            $("#tooltip").remove();
        }).mousemove(function(e){
            $("#tooltip").css({
                "top" : (e.pageY+y) + "px",
                "left" : (e.pageX+x) + "px"
            }).show("fast");
        });    	
       })
    </script>
  </body>
</html>