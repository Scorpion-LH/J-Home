<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>简家家居生活-后台管理</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" href="/myBS/Public/img/J-home-logo-08.png"/>
    <link rel="stylesheet" href="/myBS/Public/css/site.min.css">
    <link rel="stylesheet" href="/myBS/Public/css/admin.css">
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
              	<a href="<?php echo U('Mjoin/Mjoinadd');?>" class="btn btn-add btn-warning">添加岗位</a>
              	<div class="col-xs-6 col-sm-5 col-md-3 pull-right">
              	<form action="<?php echo U('Mjoin/search');?>" method="get">
	              	<div class="input-group form-search">
		                <input type="text" name="search" class="form-control search-query" placeholder="搜索 类别 / 岗位">
		                <span class="input-group-btn">
		                  <button data-type="last" class="btn btn-info" type="submit">Search</button>
		                </span>
		              </div>
	              </form>
	              </div>
              	<div class="table-responsive">
	                <table class="table table-hover">
	                  <tr>
	                  	<th>类别</th>
	                  	<th>岗位</th>
	                  	<th>要求</th>
	                  	<th>操作</th>
	                  </tr>
	                  <?php if(is_array($Mjoin)): $i = 0; $__LIST__ = $Mjoin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
	                  	<td><?php echo ($v["leibie"]); ?></td>
	                  	<td><?php echo ($v["gangwei"]); ?></td>
	                  	<td class="join-content"><?php echo (htmlspecialchars_decode($v["yaoqiu"])); ?></td>
	                  	<td><a href="<?php echo U('Mjoin/Mjoinupdate',array('id'=>$v['id']));?>" class="btn btn-primary">修改</a>
	                  		<a href="<?php echo U('Mjoin/join_del',array('id'=>$v['id']));?>" class="del-hide" hidden="hidden" ><span>删除</span></a>
	                  		<button id="<?php echo ($v["id"]); ?>" type="button" class="del-btn btn btn-danger" data-toggle="modal" data-target="#myModal<?php echo ($v["id"]); ?>">
												  删除
												</button>
	                  	</td>
	                  </tr>
	                  <div class="modal fade" id="myModal<?php echo ($v["id"]); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										  <div class="modal-dialog" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										        <h4 class="modal-title" id="myModalLabel">数据将无法恢复，确认删除吗？</h4>
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-default" onclick="del(<?php echo ($v["id"]); ?>)" >确认</button>
										        <button type="button" class="btn btn-primary" data-dismiss="modal">取消</button>
										      </div>
										    </div>
										  </div>
										</div><?php endforeach; endif; else: echo "" ;endif; ?>
	                </table>
	                <nav aria-label="Page navigation">
									  <ul class="pagination">
									    <?php echo ($page); ?>
									  </ul>
									</nav>
	              </div>
              </div>
            </div>
        </div><!-- content -->
      </div>
    </div>
    <script src="/myBS/Public/js/jquery-2.2.2.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
       function del(id){
        	$("#"+id).prev('.del-hide').children().click();
       }
       
       $(function(){
	       $('.join-content').each(function(){
          var maxwidth = 50; //设置长度
          if($(this).text().length>maxwidth){
            $(this).text($(this).text().substring(0,maxwidth));
           	$(this).html($(this).html()+'...')
            };
          })
       })
    </script>
  </body>
</html>