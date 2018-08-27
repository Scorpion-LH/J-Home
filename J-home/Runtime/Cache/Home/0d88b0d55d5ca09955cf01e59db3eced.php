<?php if (!defined('THINK_PATH')) exit();?><title>购物清单-简家家居生活</title>
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
	.has-feedback label~.form-control-feedback {
		top:20px;
	}
</style>
<div class="bill">
	<div class="container">
		<?php if(empty($bill)): ?><div class="col-xs-12 is-empty">
				<div class="jumbotron">
			        <h1>您还没有添加产品，<br />先去添加吧!</h1><br />
			        <p><a href="<?php echo U('Index/index');?>" class="btn btn-primary btn-lg" role="button">
			      	 去逛逛</a>
			      	</p>
				</div>
				<h3>为您推荐：</h3>
				<div class="row img-right">
					<?php if(is_array($keting)): $i = 0; $__LIST__ = $keting;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$kt): $mod = ($i % 2 );++$i; if(is_array($kt['good'])): $i = 0; $__LIST__ = $kt['good'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?><div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
								<a href="<?php echo U('Goods/good',array('id'=>$g['id']));?>">
									<div class="col-xs-7 col-sm-12 col-md-12">
							     		<img data-original="<?php echo ($g["thumbnail"]); ?>" alt="..." class="img-responsive">
							     	</div>
									<div class="col-xs-5 col-sm-12 col-md-12">
							      		<p><?php echo ($g["name"]); ?>(<?php echo ($g["sname"]); ?>)</p>
							     	</div>
							    </a>
							</div><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
					<?php if(is_array($woshi)): $i = 0; $__LIST__ = $woshi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ws): $mod = ($i % 2 );++$i; if(is_array($ws['good'])): $i = 0; $__LIST__ = $ws['good'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?><div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
								<a href="<?php echo U('Goods/good',array('id'=>$g['id']));?>">
									<div class="col-xs-7 col-sm-12 col-md-12">
							     		<img data-original="<?php echo ($g["thumbnail"]); ?>" alt="..." class="img-responsive">
							     	</div>
									<div class="col-xs-5 col-sm-12 col-md-12">
							      		<p><?php echo ($g["name"]); ?>(<?php echo ($g["sname"]); ?>)</p>
							     	</div>
							    </a>
							</div><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
					<?php if(is_array($canting)): $i = 0; $__LIST__ = $canting;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ct): $mod = ($i % 2 );++$i; if(is_array($ct['good'])): $i = 0; $__LIST__ = $ct['good'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?><div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
								<a href="<?php echo U('Goods/good',array('id'=>$g['id']));?>">
									<div class="col-xs-7 col-sm-12 col-md-12">
							     		<img data-original="<?php echo ($g["thumbnail"]); ?>" alt="..." class="img-responsive">
							     	</div>
									<div class="col-xs-5 col-sm-12 col-md-12">
							      		<p><?php echo ($g["name"]); ?>(<?php echo ($g["sname"]); ?>)</p>
							     	</div>
							    </a>
							</div><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
					<?php if(is_array($chufang)): $i = 0; $__LIST__ = $chufang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cf): $mod = ($i % 2 );++$i; if(is_array($cf['good'])): $i = 0; $__LIST__ = $cf['good'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?><div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
								<a href="<?php echo U('Goods/good',array('id'=>$g['id']));?>">
									<div class="col-xs-7 col-sm-12 col-md-12">
							     		<img data-original="<?php echo ($g["thumbnail"]); ?>" alt="..." class="img-responsive">
							     	</div>
									<div class="col-xs-5 col-sm-12 col-md-12">
							      		<p><?php echo ($g["name"]); ?>(<?php echo ($g["sname"]); ?>)</p>
							     	</div>
							    </a>
							</div><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
					<?php if(is_array($yushi)): $i = 0; $__LIST__ = $yushi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ys): $mod = ($i % 2 );++$i; if(is_array($ys['good'])): $i = 0; $__LIST__ = $ys['good'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?><div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
								<a href="<?php echo U('Goods/good',array('id'=>$g['id']));?>">
									<div class="col-xs-7 col-sm-12 col-md-12">
							     		<img data-original="<?php echo ($g["thumbnail"]); ?>" alt="..." class="img-responsive">
							     	</div>
									<div class="col-xs-5 col-sm-12 col-md-12">
							      		<p><?php echo ($g["name"]); ?>(<?php echo ($g["sname"]); ?>)</p>
							     	</div>
							    </a>
							</div><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		<?php else: ?>
		<div class="tip">
			<img data-original="/myBS/Public/img/about/ywqd1.jpg"/>
			<h3>您可以： </h3>
			<ul>
				<li>打印清单后带往简家体验馆进行体验选购。打印清单带到商场，帮助您更快在简家购买到心仪的家具。</li>
				<li>点击预约，填写个人信息，简家客服会在24小时内联系您商量定制事宜。</li>
			</ul>
		</div>
		<div class="table-responsive" id="printArea">
		  <table class="table buy-table" >
		  	<tr>
		  		<th>家具</th>
		  		<th>参考价</th>
		  		<th>数量</th>
		  		<th>小计</th>
		  		<th></th>
		  	</tr>
		  	<?php if(is_array($bill)): $i = 0; $__LIST__ = $bill;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
		  		<td><?php echo ($v["title"]); ?>：<?php echo ($v["name"]); ?>(<?php echo ($v["sname"]); ?>)</td>
		  		<td>¥<span class="unit-price"><?php echo ($v["price"]); ?></span></td>
		  		<td><input type="number" class="num" value="<?php echo ($v["num"]); ?>" width="20" min="1"/></td>
		  		<td>¥<span class="total-price"></span></td>
		  		<td>
		  			<a href="<?php echo U('Goods/cart_del',array('id'=>$v['id']));?>" hidden="hidden"><span>删除</span></a>
		  			<a href="javascript:void(0);" id="<?php echo ($v["id"]); ?>" data-toggle="modal" data-target="#myModal<?php echo ($v["id"]); ?>"><i class="glyphicon glyphicon-remove"></i></a>
		  		</td>
		  	</tr>
		  	<div class="modal fade" id="myModal<?php echo ($v["id"]); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo ($v["id"]); ?>">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel<?php echo ($v["id"]); ?>">确定要将该商品从愿望清单中删除吗？</h4>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" onclick="del(<?php echo ($v["id"]); ?>)" >确认</button>
			        <button type="button" class="btn btn-primary" data-dismiss="modal">取消</button>
			      </div>
			    </div>
			  </div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		  </table>
			<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="success">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="success">恭喜您预约成功！</h4>
			      </div>
			      <div class="modal-body" style="padding: 50px 15px;">
			      	<h4>请保持电话畅通，客服将在24小时内联系您商量定制事宜。</h4><br />
			      	<h4>如有疑问请拨打热线电话：020-528-8549。</h4>
			      </div>
			      <div class="modal-footer">
			        <a href="<?php echo U('Index/index');?>" class="btn btn-primary">返回主页</a>
			        <button type="button" class="btn btn-default" data-dismiss="modal">确认</button>
			      </div>
			    </div>
			  </div>
			</div>
		  <div class="all-price fr">
		  	<span>总计：¥</span>
		  	<span class="all-num"></span>
		  	<button type="button" class="btn btn-lg btn-primary" onclick="onprint()">打印</button>
		  	<button type="button" class="btn btn-lg btn-primary yy-btn" data-toggle="modal" data-target="#myModal">预约</button>
		  	<p style="color: grey;margin-top: 10px;">价格仅为参考，实际价格与尺寸以定制结果为准。</p>
		  </div><?php endif; ?>
		  <div class="clearfix"></div>
		  <div class="print-show" hidden="hidden">
			温馨提示：<br />
			当您前往简家线下体验馆时请携带上您的愿望小票，<br />
			可以出示愿望小票给服务人员以便更快速的找到您心仪的物品。
		  </div>
		</div>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
			    <div class="modal-content">
			        <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">请填写个人信息</h4>
			        </div>
			        <div class="modal-body">
			        <form action="" method="post">
						<div class="form-group">
						    <label for="name">称呼：<span style="color: red;">*</span></label>
						    <input type="text" class="form-control" id="name" placeholder="请填写您的称呼/姓名" required="required">
						</div>
						<label for="">性别：</label>
						<label class="radio-inline">
						  <input type="radio" name="sex" id="man" value="先生" checked="checked"> 先生
						</label>
						<label class="radio-inline">
						  <input type="radio" name="sex" id="women" value="女士"> 女士
						</label><br /><br />
						<div class="form-group">
						    <label for="tel">手机：<span style="color: red;">*</span></label>
						    <input type="tel" class="form-control" id="tel" placeholder="请填写您的联系方式" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="11" required="required">
						</div>
						<div class="form-group">
						    <label for="email">邮箱：</label>
						    <input type="email" class="form-control" id="email" placeholder="请填写您的常用邮箱">
						</div>
						<div class="form-group">
						    <label for="address">居住地址：<span style="color: red;">*</span></label>
						    <input type="text" class="form-control" id="address" placeholder="请填写您的居住地址">
						</div>
						<p style="color: red;">*请务必填写正确的联系方式以便客服人员联系到您</p>
						<!--<input type="submit" value="提交"/>-->
					</form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
			        <button type="button" id="submitPre" class="btn btn-primary">确定</button>
			      </div>
			    </div>
			</div>
		</div>
		<div class="modal fade" id="confirmBox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
			<div class="modal-dialog" role="document">
			    <div class="modal-content">
			        <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel1">请确认预约定制单</h4>
			        </div>
			        <div class="modal-body">
						<div class="form-group">
						    <label>称呼：</label><span id="cname"></span>
						</div>
						<div class="form-group">
						    <label>手机：</label><span id="ctel"></span>
						</div>
						<div class="form-group">
						    <label>邮箱：</label><span id="cemail"></span>
						</div>
						<div class="form-group">
						    <label>居住地址：</label><span id="caddress"></span>
						</div>
						 <label>预约家具：</label><br />
						<table class="table" style="margin-top: 0;text-align: left;">
						  	<?php if(is_array($bill)): $i = 0; $__LIST__ = $bill;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
						  		<td><?php echo ($v["title"]); ?>：<?php echo ($v["name"]); ?>(<?php echo ($v["sname"]); ?>) * <?php echo ($v["num"]); ?></td>
						  	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</table>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
			        <button type="button" id="submit" class="btn btn-primary">确认预约</button>
			      </div>
			    </div>
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

<script type="text/javascript">
$(function(){
	//总价计算
	var sum = 0;
	$(".total-price").each(function(){
		$(this).text(($(this).parent().prev().children().val()*$(this).parent().prev().prev().children().text()).toFixed(2))
		sum += $(this).text()*1;
	});
	$(".all-num").text(sum.toFixed(2));
	
	$(".buy-table .num").change(function(){
		var val = $(this).val();
		var total = (val*$(this).parent().prev().children().text()).toFixed(2);
		$(this).parent().next().children().text(total);
		var sum = 0;
		$(".total-price").each(function(){
			sum += Number($(this).text());
		});
		$(".all-num").text(sum.toFixed(2));
	});

//提交用户信息
	$("#submitPre").click(function(){
		var username = $("#name").val();
		var sex=$('input:radio[name="sex"]:checked').val();
		var tel = $("#tel").val();
		var email = $("#email").val();
		var address = $("#address").val();
		var err = $('<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
		var warn = $('<span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>');
		$("#name,#tel,#address").focus(function(){
			$(this).parent(".form-group").removeClass("has-error has-feedback").children('span').remove();
		});
		if(username == ""){
			$("#name").parent(".form-group").addClass("has-error has-feedback").append(err);
		};
		if(tel == "" || tel.length != 11){
			$("#tel").parent(".form-group").addClass("has-error has-feedback").append(err.clone());
		};
		if(address == ""){
			$("#address").parent(".form-group").addClass("has-error has-feedback").append(err.clone());
		};
		
		$('#myModal').on('hidden.bs.modal', function (e) {
			$("#name").parent(".form-group").removeClass("has-error has-feedback").children('span').remove();
			$("#tel").parent(".form-group").removeClass("has-error has-feedback").children('span').remove();
			$("#address").parent(".form-group").removeClass("has-error has-feedback").children('span').remove();
		})
		
		if(username != "" && tel != "" && address != "" && tel.length == 11){
			$("#cname").text(username+sex);
			$("#ctel").text(tel);
			$("#cemail").text(email);
			$("#caddress").text(address);
			$('#myModal').modal('hide');
			$('#confirmBox').modal('show');
		}
	});

	$("#submit").click(function(){
		var username = $("#name").val();
		var sex=$('input:radio[name="sex"]:checked').val();
		var tel = $("#tel").val();
		var email = $("#email").val();
		var address = $("#address").val();
		
		if(username != "" && tel != "" && address != "" && tel.length == 11){
			$.ajax({
				type:"post",
				url:"<?php echo U('Goods/submit_cart');?>",
				dataType:"json",
				async:true,
				data:{
					name:username,
					sex:sex,
					tel:tel,
					email:email,
					address:address
				},
				success:function(data){
					$('#success').modal();
					$('#confirmBox').modal('hide');
					$('#success').on('hidden.bs.modal', function (e) {
 					  window.location.reload();
					})
				},
				error: function(e){
					window.location.reload();
					console.log(e);
					alert("预约失败，请检查网络或者联系客服");
				}
			});
		}
	});

})

	function printHtml(html) {
		document.body.innerHTML = html;
		window.print();
		window.location.reload();
	}
	
	function onprint() {
		var html = $("#printArea").html();
		printHtml(html);
	}
	
	function del(id){
       $("#"+id).prev().children().click();
    }
	
</script>
</body>
</html>