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
            </ul>
          </div>
          <div class="col-xs-12 col-sm-9 content">
            <div class="M-join panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="glyphicon glyphicon-chevron-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> 招聘管理</h3>
              </div>
              <div class="panel-body">
              	<a href="<?php echo U('Map/Mapadd');?>" class="btn btn-add btn-warning">添加地址</a>
              	<div class="col-xs-6 col-sm-5 col-md-3 pull-right">
	              	<select name="" id="filterName" class="form-control">
										<option value="全国" selected="selected">全国</option>
										<option value="安徽">安徽</option>
										<option value="北京">北京</option>
										<option value="重庆">重庆</option>
										<option value="福建">福建</option>
										<option value="甘肃">甘肃</option>
										<option value="广东">广东</option>
										<option value="广西">广西</option>
										<option value="贵州">贵州</option>
										<option value="海南">海南</option>
										<option value="河北">河北</option>
										<option value="河南">河南</option>
										<option value="黑龙江">黑龙江</option>
										<option value="湖北">湖北</option>
										<option value="湖南">湖南</option>
										<option value="吉林">吉林</option>
										<option value="江苏">江苏</option>
										<option value="江西">江西</option>
										<option value="辽宁">辽宁</option>
										<option value="内蒙古">内蒙古</option>
										<option value="宁夏">宁夏</option>
										<option value="青海">青海</option>
										<option value="山东">山东</option>
										<option value="山西">山西</option>
										<option value="陕西">陕西</option>
										<option value="上海">上海</option>
										<option value="四川">四川</option>
										<option value="天津">天津</option>
										<option value="西藏">西藏</option>
										<option value="新疆">新疆</option>
										<option value="云南">云南</option>
										<option value="浙江">浙江</option>
									</select>
	              </div>
              	<div class="table-responsive">
	                <table class="table table-hover">
	                  <tr>
	                  	<th>名称</th>
	                  	<th>地址</th>
	                  	<th>联系电话</th>
	                  	<th>营业时间</th>
	                  	<th>操作</th>
	                  </tr>
	                  <?php if(is_array($map)): $i = 0; $__LIST__ = $map;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr class="map-content">
	                  	<td><?php echo ($v["name"]); ?></td>
	                  	<td><?php echo ($v["address"]); ?></td>
	                  	<td><?php echo ($v["telephone"]); ?></td>
	                  	<td><?php echo ($v["time"]); ?></td>
	                  	<td><a href="<?php echo U('Map/Mapupdate',array('id'=>$v['id']));?>" class="btn btn-primary">修改</a>
	                  		<a href="<?php echo U('Map/map_del',array('id'=>$v['id']));?>" class="del-hide" hidden="hidden" ><span>删除</span></a>
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
	      //地区搜索
		    $("#filterName").change(function(){
		    	if($(this).val()=="全国"){
		    		$(".map-content").show();
		    	}else{
				    $(".map-content").hide()
				        .filter(":contains('"+($(this).val())+"')").show();
		        }
		    });
       })
    </script>
  </body>
</html>