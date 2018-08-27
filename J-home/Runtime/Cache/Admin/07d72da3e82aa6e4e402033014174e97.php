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
		@media print{
			.btn{display: none;}
			.print-show{display: block;}
			.open {display: none;}
			ol {margin-top: 50px;margin-bottom: 50px;}
		}
		</style>
  </head>
  <body>
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
          </div>
        </div>
      </nav>
    <div class="container-fluid">
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
          <div class="M-news col-xs-12 col-sm-9 content">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">
                	<a href="javascript:void(0);" class="toggle-sidebar"><span class="glyphicon glyphicon-chevron-left" data-toggle="offcanvas" title="Maximize Panel"></span>
                	</a>订单管理</h3>
              </div>
              <div class="panel-body">
              	<div class="col-xs-6 col-sm-5 col-md-3 pull-right" style="margin-bottom: 10px;">
              	<form action="<?php echo U('order/search');?>" method="get">
	              	<div class="input-group form-search">
		                <input type="text" name="search" class="form-control search-query" placeholder="搜索 订单号/用户名	">
		                <span class="input-group-btn">
		                  <button data-type="last" class="btn btn-info" type="submit">Search</button>
		                </span>
		              </div>
	              </form>
	              </div>
              	<div class="table-responsive">
              	<table class="table table-hover">
	                  <tr>
	                  	<th>用户信息</th>
	                  	<th>预约内容</th>
	                  	<th>下单时间</th>
	                  	<th>操作</th>
	                  </tr>
	                  <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$u): $mod = ($i % 2 );++$i;?><tr>
	                  	<td>
	                  		订单号：<?php echo ($u["order_id"]); ?><br />
	                  		用户名：<?php echo ($u["user_name"]); ?> <?php echo ($u["user_sex"]); ?><br />
	                  		电话：<?php echo ($u["user_tel"]); ?><br />
	                  		<?php if(empty($u['user_email'])): ?>邮箱：未填<?php else: ?>邮箱：<?php echo ($u["user_email"]); endif; ?><br />
	                  		<?php if(empty($u['user_address'])): ?>地址：未填<?php else: ?>地址：<?php echo ($u["user_address"]); endif; ?><br />
	                  	</td>
	                  	<td>
	                  		<ol>
	                  			<?php if(is_array($u['good'])): $i = 0; $__LIST__ = $u['good'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?><li style="margin-bottom: 10px;" >
	                  				<?php echo ($g["title"]); ?>：<?php echo ($g["name"]); ?>（<?php echo ($g["sname"]); ?>）...<br />
	                  				<div class="print-show" hidden="hidden">
	                  				货号：<?php echo ($g["huohao"]); ?><br />
	                  				数量：<?php echo ($g["num"]); ?><br />
	                  				<?php if(!empty($g['guige1_name'])): echo ($g["guige1_name"]); ?>：<?php echo ($g["guige1_text"]); ?><br /><?php endif; ?>
	                  				<?php if(!empty($g['guige2_name'])): echo ($g["guige2_name"]); ?>：<?php echo ($g["guige2_text"]); ?><br /><?php endif; ?>
	                  				<?php if(!empty($g['guige3_name'])): echo ($g["guige3_name"]); ?>：<?php echo ($g["guige3_text"]); ?><br /><?php endif; ?>
	                  				参考价格：<?php echo ($g["price"]); ?><br />
	                  				</div>
	                  				</li><?php endforeach; endif; else: echo "" ;endif; ?>
	                  			<a href="javascript:void(0);" class="open">展开</a>
	                  		</ol>
	                  	</td>
	                  	<td>
	                  		<?php echo ($u["user_time"]); ?>
	                  	</td>
	                  	<td>
	                  		<button type="button" class="del-btn btn btn-primary btn-print">
												  打印
												</button>
	                  		<a href="<?php echo U('Order/order_del',array('id'=>$u['id']));?>" class="del-hide" hidden="hidden" ><span>删除</span></a>
	                  		<button id="<?php echo ($u["id"]); ?>" type="button" class="del-btn btn btn-danger" data-toggle="modal" data-target="#myModal<?php echo ($u["id"]); ?>">
												  删除
												</button>
	                  	</td>
	                  </tr>
	                  <div class="modal fade" id="myModal<?php echo ($u["id"]); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										  <div class="modal-dialog" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										        <h4 class="modal-title" id="myModalLabel">数据将无法恢复，确认删除吗？</h4>
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-default" onclick="del(<?php echo ($u["id"]); ?>)" >确认</button>
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
            </div>
        </div>
      </div>
    <script src="/myBS/Public/js/jquery-2.2.2.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
    		function printHtml(html) {
						document.body.innerHTML = html;
						window.print();
						window.location.reload();
					}

       function del(id){
        	$("#"+id).prev('.del-hide').children().click();
       }
       
       $(function(){
        	$(".open").click(function(){
	       			if($(this).siblings('li').children('div').is(":visible")){
	       				 $(this).text("展开");
	       			}else{
	       				$(this).text("收起");
	       			}
           		$(this).siblings('li').children('div').slideToggle();
	      	 });
	      	 
	      	 $(".btn-print").click(function(){
	      	 		var html = $(this).parents('tr').html();
	      	 		printHtml(html);
	      	 })
        })
//	       
//	       
//     })
    </script>
  </body>
</html>