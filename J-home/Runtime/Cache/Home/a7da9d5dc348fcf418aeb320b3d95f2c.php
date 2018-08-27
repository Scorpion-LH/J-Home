<?php if (!defined('THINK_PATH')) exit();?><title>NOCKEBY 诺可布-双人沙发, 坦诺 褐色, 木头-简家家居生活</title>
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

<style>
	.scale-img {
		border: 1px solid gainsboro;
	}
</style>

<div class="goods-detail">
	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="<?php echo U('Index/index');?>">首页</a></li>
		  <li><a href="<?php echo U('List/lglist',array('room'=>$topClass['id']));?>"><?php echo ($topClass["title"]); ?></a></li>
		  <li><a href="<?php echo U('List/lglist',array('room'=>$topClass['id']));?>"><?php echo ($class["title"]); ?></a></li>
		  <li><a href="<?php echo U('List/mdlist',array('title'=>$good['title']));?>" id="title"><?php echo ($good["title"]); ?></a></li>
		</ol>
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<div class="goods-big-img">
					<img src="<?php echo ($good["thumbnail"]); ?>" xq_big="true" setting='{"pwidth":300,"pheight":300,"scale" : 2,"pclass" : "scale-img","margin_top" : 100,"margin_left" : 50}'/>
				</div>
				<div class="goods-min-img">
					<ul>
						<?php if(is_array($gimg)): $i = 0; $__LIST__ = $gimg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$img): $mod = ($i % 2 );++$i; if(is_array($img)): $i = 0; $__LIST__ = $img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i; if(!empty($sub)): ?><li><img src="<?php echo ($sub); ?>"/></li><?php endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-md-5 col-md-offset-1">
				<div class="goods-info">
					<h2 id="myid" hidden="hidden"><?php echo ($good["id"]); ?></h2>
					<h2 id="name"><?php echo ($good["name"]); ?></h2>
					<p id="sname"><?php echo ($good["sname"]); ?></p><br />
					<span>参考价：</span><h1>¥<span id="price"><?php echo (sprintf('%.2f',$good["price"])); ?></span></h1><br />
					<p>货号：<span id="huohao"><?php echo ($good["huohao"]); ?></span></p>
					<?php if(!empty($gg1_text)): ?><div class="row">
						<div class="col-md-8"><span id="gg1"><?php echo ($good["guige1_name"]); ?></span>
							<select class="form-control" id="select1">
							<?php if(is_array($option1)): $i = 0; $__LIST__ = $option1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v1); ?>"><?php echo ($v1); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
						</div>
					</div><?php endif; ?>
					<?php if(!empty($gg2_text)): ?><div class="row">
						<div class="col-md-8"><span id="gg2"><?php echo ($good["guige2_name"]); ?></span>
							<select class="form-control" id="select2">
							<?php if(is_array($option2)): $i = 0; $__LIST__ = $option2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v2); ?>"><?php echo ($v2); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
						</div>
					</div><?php endif; ?>
					<?php if(!empty($gg3_text)): ?><div class="row">
						<div class="col-md-8"><span id="gg3"><?php echo ($good["guige3_name"]); ?></span>
							<select class="form-control" id="select3">
							<?php if(is_array($option3)): $i = 0; $__LIST__ = $option3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v3): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v3); ?>"><?php echo ($v3); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
						</div>
					</div><?php endif; ?>
					<div class="row">
					    <div class="col-sm-3">数量
					      <input type="number" class="form-control" id="num" placeholder="" value="1">
					    </div>
					</div>
					<button type="button" class="btn btn-lg btn-primary" id="save">保存至愿望清单</button>
					<div class="row">
					    <div class="col-sm-12"><br />
					    	<p style="color: red;">简家家具均可定制，最终价格与尺寸以实际定制结果为准。</p>
					    </div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-8">
				<div class="goods-detail-info">
					<div class="panel panel-default">
					  <div class="panel-heading">重要特征</div>
					  <div class="panel-body">
					       <?php echo (htmlspecialchars_decode($good["tezheng"])); ?>
					  </div>
					</div>
					<div class="panel panel-default">
					  <div class="panel-heading">安装后尺寸</div>
					  <div class="panel-body">
					      <?php echo (htmlspecialchars_decode($good["size"])); ?>
					  </div>
					</div>
					<div class="panel panel-default">
					  <div class="panel-heading">
					    <h3 class="panel-title">产品描述</h3>
					  </div>
					  <div class="panel-body">
						<?php echo (htmlspecialchars_decode($good["describe"])); ?>
					  </div>
					</div>
					<?php if(!empty($good['baoyang'])): ?><div class="panel panel-default">
					  <div class="panel-heading">
					    <h3 class="panel-title">保养说明</h3>
					  </div>
					  <div class="panel-body">
						<?php echo (htmlspecialchars_decode($good["baoyang"])); ?>
					  </div>
					</div><?php endif; ?>
					<?php if(!empty($good['huanbao'])): ?><div class="panel panel-default">
					  <div class="panel-heading">
					    <h3 class="panel-title">环保信息</h3>
					  </div>
					  <div class="panel-body">
						<?php echo (htmlspecialchars_decode($good["huanbao"])); ?>
					  </div>
					</div><?php endif; ?>
					<?php if(!empty($good['tip'])): ?><div class="panel panel-default">
					  <div class="panel-heading">
					    <h3 class="panel-title">相关提示</h3>
					  </div>
					  <div class="panel-body">
						<?php echo (htmlspecialchars_decode($good["tip"])); ?>
					  </div>
					</div><?php endif; ?>
				</div>
			</div>
			<div class="col-md-4">
				<div class="goods-more">
					<p>更多<span><?php echo ($class["title"]); ?></span></p>	
					<?php if(is_array($subclass)): $i = 0; $__LIST__ = $subclass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?><a href="<?php echo U('List/mdlist',array('title'=>$s['title']));?>" class="col-sm-6 col-md-12">
						<img data-original="<?php echo ($s["img"]); ?>" alt="" class="img-responsive"/>
						<p><?php echo ($s["title"]); ?></p>
					</a><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">保存结果</h4>
      </div>
      <div class="modal-body" style="margin: 30px auto;">
        <h1>所选商品已成功保存至购物清单</h1>
      </div>
      <div class="modal-footer" style="text-align: center;">
        <a href="<?php echo U('Goods/bill');?>" class="btn btn-primary btn-lg" target="_blank">查看我的购物清单</a>
        <a href="<?php echo U('List/lglist',array('room'=>$topClass['id']));?>" class="btn btn-default btn-lg">浏览更多<?php echo ($topClass['title']); ?>家具</a>
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

<script src="/myBS/Public/js/xq_bigimg.js" type="text/javascript" charset="utf-8"></script>
	<script>
	$(function(){    
   
		$(".goods-min-img li img").hover(function(){
			var minImgSrc = $(this).attr("src");
			$(".goods-big-img img").attr("src",minImgSrc);
		});
		
		$("#save").click(function(){
			var myid = $("#myid").text();
			var title = $("#title").text();
			var name = $("#name").text();
			var sname = $("#sname").text();
			var price = $("#price").text();
			var huohao = $("#huohao").text();
			var gg1 = $("#gg1").text();
			var gg2 = $("#gg2").text();
			var gg3 = $("#gg3").text();
			var select1 = $("#select1").val();
			var select2 = $("#select2").val();
			var select3 = $("#select3").val();
			var num = $("#num").val();
			var badge = Number($(".badge1").text());
			
			$.ajax({
				type:"post",
				url:"<?php echo U('Goods/show_bill');?>",
				dataType:"json",
				async:true,
				data:{
					id:myid,
					title:title,
					name:name,
					sname:sname,
					price:price,
					huohao:huohao,
					gg1:gg1,
					gg2:gg2,
					gg3:gg3,
					select1:select1,
					select2:select2,
					select3:select3,
					num:num,
					badge:badge
				},
				success:function(data){
					$(".badge1").text(data);
					$(".badge2").text(data);
					$('#myModal').modal();
//					$('#myModal').on('hidden.bs.modal', function (e) {
//					  self.location=document.referrer;
//					})
				},
				error: function(e){
					alert("失败");
				}
			});
			
		});
		
		var win = $(window);
	    var doc = $(document);
	    var iNav = $(".index-nav");
	      	
	    win.scroll(function(){
	    	if(doc.scrollTop()>150){
	    		iNav.fadeIn(100);
	    	}else{
	    		iNav.fadeOut(100);
	    	}
	    });
	});
    </script>
    
</body>
</html>