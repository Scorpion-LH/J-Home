<?php if (!defined('THINK_PATH')) exit();?><title>购物清单-简家家居生活</title>
<!doctype html>
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
	        <li><a href="<?php echo U('Goods/bill');?>">购物清单<span class="badge"><?php echo ($bill["badge"]); ?></span></a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>


<div class="bill">
	<div class="container">
		<div class="tip">
			<h3>您可以： </h3>
			<ul>
				<li>打印后带往体验馆进行体验选购，打印购物清单带到商场，帮助您更快在简家商场购物。</li>
				<li>点击预约，客服会在24小时内联系您商量定制事宜</li>
			</ul>
		</div>
		<div class="table-responsive" id="printArea">
		  <table class="table buy-table" >
		  	<tr>
		  		<th>商品信息</th>
		  		<th>参考价格</th>
		  		<th>数量</th>
		  		<th>小计</th>
		  		<th></th>
		  	</tr>
		  	<?php if(is_array($bill)): $i = 0; $__LIST__ = $bill;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
		  		<td><?php echo ($v["name"]); ?></td>
		  		<td>¥<span class="unit-price"><?php echo ($v["price"]); ?></span></td>
		  		<td><input type="number" class="num" value="<?php echo ($v["num"]); ?>" width="20"/></td>
		  		<td>¥<span class="total-price"></span></td>
		  		<td>
		  			<a href=""><i class="glyphicon glyphicon-remove"></i></a>
		  		</td>
		  	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		  	<!--<tr>
		  		<td>sdfasdf</td>
		  		<td>¥<span class="unit-price">999.00</span></td>
		  		<td><input type="number" class="num" value="1" width="20"/></td>
		  		<td>¥<span class="total-price"></span></td>
		  		<td>
		  			<a href=""><i class="glyphicon glyphicon-remove"></i></a>
		  		</td>
		  	</tr>
		  	<tr>
		  		<td>sdfasdf</td>
		  		<td>¥<span class="unit-price">999.00</span></td>
		  		<td><input type="number" class="num" value="1" width="20"/></td>
		  		<td>¥<span class="total-price"></span></td>
		  		<td>
		  			<a href=""><i class="glyphicon glyphicon-remove"></i></a>
		  		</td>
		  	</tr>
		  	<tr>
		  		<td>sdfasdf</td>
		  		<td>¥<span class="unit-price">999.00</span></td>
		  		<td><input type="number" class="num" value="1" width="20"/></td>
		  		<td>¥<span class="total-price"></span></td>
		  		<td>
		  			<a href=""><i class="glyphicon glyphicon-remove"></i></a>
		  		</td>
		  	</tr>
		  	<tr>
		  		<td>sdfasdf</td>
		  		<td>¥<span class="unit-price">999.99</span></td>
		  		<td><input type="number" class="num" value="1" width="20"/></td>
		  		<td>¥<span class="total-price"></span></td>
		  		<td>
		  			<a href=""><i class="glyphicon glyphicon-remove"></i></a>
		  		</td>
		  	</tr>-->
		  </table>
		  <div class="all-price fr">
		  	<span>总计：¥</span>
		  	<span class="all-num"></span>
		  	<button type="button" class="btn btn-lg btn-primary" onclick="onprint()">打印</button>
		  	<button type="button" class="btn btn-lg btn-primary yy-btn" data-toggle="modal" data-target="#myModal">预约</button>
		  </div>
		  <div class="clearfix"></div>
		  <div class="print-show" hidden="hidden">
			请带上您的购物小票bilibili哔哩哔哩
			请带上您的购物小票bilibili哔哩哔哩
			请带上您的购物小票bilibili哔哩哔哩
			请带上您的购物小票bilibili哔哩哔哩
		  </div>
		</div>
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">预约定制</h4>
			      </div>
			      <div class="modal-body">
			        <form action="" method="post">
						<div class="form-group">
						    <label for="name">称呼：</label>
						    <input type="text" class="form-control" id="name" placeholder="请填写您的称呼/姓名" required="required">
						 </div>
						 <label for="">性别：</label>
						<label class="radio-inline">
						  <input type="radio" name="sex" id="man" value="man" checked="checked"> 先生
						</label>
						<label class="radio-inline">
						  <input type="radio" name="sex" id="women" value="women"> 女士
						</label><br /><br />
						<div class="form-group">
						    <label for="name">手机：</label>
						    <input type="tel" class="form-control" id="name" placeholder="请填写您的联系方式" required="required">
						</div>
						<p>*请务必填写正确的联系方式以便客服人员联系到您</p>
						<!--<input type="submit" value="提交"/>-->
					</form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
			        <button type="button" class="btn btn-primary">提交</button>
			      </div>
			   </div>
			</div>
		</div>
	</div>
</div>

	<div class="footer">
		<div class="row">
			<div class="col-xs-12 col-sm-4">
				© 2015-2016 简家家居官方网站
			</div>
			<div class="col-xs-12 col-sm-4">
				地址：上海市静安区南京西路1601号35楼3501-3508室
			</div>
			<div class="col-xs-12 col-sm-4">
				沪ICP备08018225号
			</div>
		</div>
	</div>
	<a class="btn btn-backtop" style="display: none; cursor: pointer; width: 50px;height: 50px;background-color:gainsboro;position: fixed;right: 20px;bottom: 20px;">
	    <i class="icon-chevron-up icon-2x"></i>
	</a>
	<script src="/myBS/Public/js/jquery-2.2.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/myBS/Public/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=0E2YhwPFVSH6lAyctGxQYTGGY79jZzjq"></script>
	<script type="text/javascript">
		$(function(){
			$('.btn-backtop').click(function(){
				$('body,html').animate({scrollTop:0},500);
			});
			$(window).scroll(function(){
				if(document.body.scrollTop == 0){
					$('.btn-backtop').hide();
				}else{
					$('.btn-backtop').show();
				}
			})
			
			$("img").addClass("img-responsive");
			
		})
	</script>

<script type="text/javascript">
$(function(){
	
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
	$(".total-price").parent("td").css({"max-width":"45px"});
	
	$(".yy-btn").click(function(){
		$(".yuyue").slideToggle();
	})
})

	function printHtml(html) {
//		var bodyHtml = document.body.innerHTML;
		document.body.innerHTML = html;
		window.print();
//		document.body.innerHTML = bodyHtml;
		window.location.reload();
	}
	function onprint() {
		var html = $("#printArea").html();
		printHtml(html);
	}
	
</script>
</body>
</html>