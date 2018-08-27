<?php if (!defined('THINK_PATH')) exit();?><title>简家体验馆-简家家居生活</title>
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
	.row {
		margin-left: 0;
	}
</style>
<div class="map">
	<div class="container">
		<div class="row section-one">
			<img src="/myBS/Public/img/map/map01.jpg" class="img-responsive"/>
			<p>简家在21个省34个市设立了超过50家线下体验馆，欢迎体验。<br />
			在未来，简家将逐步把体验馆建设成家居城，并完善网上商城，敬请期待！</p>
		</div>
		<div class="row section-two">
		  <div class="col-xs-12 col-md-4">
		      <img data-original="/myBS/Public/img/map/map03.jpg" alt="..." class="img-responsive">
		  </div>
		  <div class="col-xs-12 col-md-4">
		      <img data-original="/myBS/Public/img/map/map04.jpg" alt="..." class="img-responsive">
		  </div>
		  <div class="col-xs-12 col-md-4">
		      <img data-original="/myBS/Public/img/map/map05.jpg" alt="..." class="img-responsive">
		  </div>
		</div>
		<div class="row section-three">
			<div class="col-md-4 map-text">
				<div>
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
				<?php if(is_array($map)): $i = 0; $__LIST__ = $map;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="map-address">
						<a href="#map"><i class="icon-map-marker"></i>  <?php echo ($vo["name"]); ?></a>
						<p data-tel = "<?php echo ($vo["telephone"]); ?>" data-time = "<?php echo ($vo["time"]); ?>">地址：<?php echo ($vo["address"]); ?></p>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				
				        <!--要查询的地址：-->
				        <input id="text_" type="text" value="" style="margin-right:100px;" hidden="hidden"/>
				        <!--查询结果(经纬度)：-->
				        <input id="result_" type="text" hidden="hidden"/>
		       		<!--<input class="btn" type="button" value="查询"  hidden="hidden"/>-->
			</div>
			<div class="col-xs-12 col-md-7 col-md-offset-1">
		        <div id="map"></div>
		        <p id="map-tip">点击红点查看电话和营业时间</p>
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
$(document).ready(function(){
	$(".navbar-nav li:eq(2)").addClass("active");
	
	//#map固定
	var elm = $('#map');
	var elm1 = $('#map-tip');
    var startPos = $(elm).offset().top;
    var startPos1 = $(elm1).offset().top;
    $.event.add(window, "scroll", function() {
        var p = $(window).scrollTop();
        $(elm).css('position',((p) > startPos) ? 'fixed' : 'relative');
        $(elm1).css('position',((p) > startPos) ? 'fixed' : 'relative');
        $(elm).css('top',((p) > startPos) ? '0px' : '');
        $(elm1).css('top',((p) > startPos) ? '510px' : '');
    });
    
    //地区搜索
    $("#filterName").change(function(){
    	if($(this).val()=="全国"){
    		$(".map-address").show();
    	}else{
		    $(".map-address").hide()
		        .filter(":contains('"+($(this).val())+"')").show();
        }
    });
    
    
	//将点击值传给地图查询函数
	$(".map-text a").click(function(){
		$("#text_").val($(this).text());
		var tel = $(this).next().data("tel");
		var time = $(this).next().data("time");
		searchByStationName(tel,time);
	});
})

//百度地图
var map = new BMap.Map("map");
    map.centerAndZoom("广州大学华软软件学院", 16);
    map.enableScrollWheelZoom();    //启用滚轮放大缩小，默认禁用
    map.enableContinuousZoom();    //启用地图惯性拖拽，默认禁用

    map.addControl(new BMap.NavigationControl());  //添加默认缩放平移控件
    map.addControl(new BMap.OverviewMapControl()); //添加默认缩略地图控件
    map.addControl(new BMap.OverviewMapControl({ isOpen: true, anchor: BMAP_ANCHOR_BOTTOM_RIGHT }));   //右下角，打开

    var localSearch = new BMap.LocalSearch(map);
    localSearch.enableAutoViewport(); //允许自动调节窗体大小
    
function searchByStationName(tel,time) {
    map.clearOverlays();//清空原来的标注
    var keyword = document.getElementById("text_").value;
    localSearch.setSearchCompleteCallback(function (searchResult) {
        var poi = searchResult.getPoi(0);
        document.getElementById("result_").value = poi.point.lng + "," + poi.point.lat;
        map.centerAndZoom(poi.point, 17);
        var marker = new BMap.Marker(new BMap.Point(poi.point.lng, poi.point.lat));  // 创建标注，为要查询的地方对应的经纬度
        map.addOverlay(marker);
//      var content = document.getElementById("text_").value + "<br/><br/>经度：" + poi.point.lng + "<br/>纬度：" + poi.point.lat;
        var content = document.getElementById("text_").value + "<br/><br/>电话：" + tel + "<br/>营业时间：" + time;
        var infoWindow = new BMap.InfoWindow("<p style='font-size:14px;'>" + content + "</p>");
        marker.addEventListener("click", function () { this.openInfoWindow(infoWindow); });
           marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    });
    localSearch.search(keyword);
} 
  </script>

</body>
</html>