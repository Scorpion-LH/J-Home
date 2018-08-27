<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>简家家居生活-后台管理</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" href="/myBS/Public/img/J-home-logo-08.png"/>
    <!-- site css -->
    <link rel="stylesheet" href="/myBS/Public/css/site.min.css">
    <link rel="stylesheet" href="/myBS/Public/css/admin.css">
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
                <!--<li class="list-group-item"><a href="forms.html"><i class="glyphicon glyphicon-cog"></i>修改密码</a></li>-->
            </ul>
          </div>
          <div class="M-news col-xs-12 col-sm-9 content">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">
                	<a href="javascript:void(0);" class="toggle-sidebar"><span class="glyphicon glyphicon-chevron-left" data-toggle="offcanvas" title="Maximize Panel"></span>
                	</a>产品管理</h3>
              </div>
              <div class="panel-body">
              	<a href="<?php echo U('Good/goodadd');?>" class="btn btn-add btn-warning">添加产品</a>
              	<div class="col-xs-6 col-sm-5 col-md-3 pull-right">
              	<form action="<?php echo U('Good/search');?>" method="get">
	              	<div class="input-group form-search">
		                <input type="text" name="search" class="form-control search-query" placeholder="搜索 分类 / 产品	">
		                <span class="input-group-btn">
		                  <button data-type="last" class="btn btn-info" type="submit">Search</button>
		                </span>
		              </div>
	              </form>
	              </div>
              	<div class="table-responsive search">
              	<table class="table table-hover">
              			<thead>
	                  <tr>
	                  	<th>封面</th>
	                  	<th>名称</th>
	                  	<th>货号</th>
	                  	<th>参考价格</th>
	                  	<th>首页显示</th>
	                  	<th>操作</th>
	                  </tr>
	                  </thead>
	                  <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
	                  	<td hidden="hidden"><span><?php echo ($v["id"]); ?></span></td>
	                  	<td class="good-thum">
	                  		<a href="<?php echo ($v["thumbnail"]); ?>" class="tooltip" title="<?php echo ($v["name"]); ?>（<?php echo ($v["sname"]); ?>）">
	                  			<img src="<?php echo ($v["thumbnail"]); ?>"/>
	                  		</a>
	                  	</td>
	                  	<td><?php echo ($v["room"]); ?><br />
	                  	┠ <?php echo ($v["btitle"]); ?><br />
	                  	┠ <?php echo ($v["title"]); ?><br />
	                  	┗ <?php echo ($v["name"]); ?>（<?php echo ($v["sname"]); ?>）</td>
	                  	<td><?php echo ($v["huohao"]); ?></td>
	                  	<td><?php echo (sprintf('%.2f',$v["price"])); ?></td>
	                  	<td>
	                  		<div style="padding-left: 10px;">
	                  			<?php if($v['index_show'] == 1 ): ?><input type="checkbox" name="index_show" class="index_show" checked="checked">
													<?php else: ?> 
											    <input type="checkbox" name="index_show" class="index_show"><?php endif; ?>
		                  	</div>
	                  	</td>
	                  	<td><a href="<?php echo U('Good/goodupdate',array('id'=>$v['id']));?>" class="btn btn-primary">修改</a>
	                  		<a href="<?php echo U('Good/good_del',array('id'=>$v['id']));?>" class="del-hide" hidden="hidden" ><span>删除</span></a>
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
            </div>
        </div><!-- content -->
        <footer>
        	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
        </footer>
      </div>
      
    <script src="/myBS/Public/js/jquery-2.2.2.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="/myBS/Public/js/site.min.js"></script>
    <script type="text/javascript">
       function del(id){
        	$("#"+id).prev('.del-hide').children().click();
       }
				
       $(function(){
       		
       		var arr = [];//定义数组  
			    //取出所有mytitle的值，为数组赋值  
			    $('.mytitle').each(function () {  
			        arr.push($(this).html())  
			    });  
					
	       	$.ajax({
	       		type:"get",
	       		url:"<?php echo U('Good/get_title');?>",
	       		async:true,
	       		traditional: true,
	       		data:arr,
	       		success:function(data){
//	       			console.log(data);
	       		},
	       		error:function(e){
	       			console.log(e);
	       			alert("失败");
	       		}
     		 	});
       	
       //根据checkbox选中状态更新数据库对应字段
       	$(".index_show").click(function(){
					var self = $(this);
					var myid = $(this).parents('tr').children().children('span').text();
       		if(self.is(":checked")){
       			$.ajax({
       				type:"post",
       				url:"<?php echo U('Good/check');?>",
       				dataType:"json",
       				async:true,
       				data:{
       					index_show:1,
       					id:myid
       				},
       				success:function(data){
       					
       				},
       				error:function(){
       					self.prop("checked",false);
       				}
       			});
       		} else {
       			$.ajax({
       				type:"post",
       				url:"<?php echo U('Good/check');?>",
       				async:true,
       				data:{
       					index_show:0,
       					id:myid
       				},
       				success:function(data){
       					
       				},
       				error:function(){
       					self.prop("checked",true);
       				}
       			});
       		}
       	})
       
       
       			$('#room').change(function(){
       				var roomVal = $("#room option:selected").text();
			        $.ajax({
			            type:"post",
			            url:"<?php echo U('Good/good');?>",
			            data:{
			            		pid:$('#room').val(),
			            		roomText:roomVal
			            },
			            dataType:"json",
			            success:function(data){
			              $('#btitle').html(data);
			            }
			        });
			    	});
			    	
				    $('#btitle').change(function(){
			        $.ajax({
			            type:"post",
			            url:"<?php echo U('Good/good');?>",
			            data:'pid='+$('#btitle').val(),
			            dataType:"json",
			            success:function(data){
			              $('#stitle').html(data);
			            }
			        });
			    	});
			    	
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