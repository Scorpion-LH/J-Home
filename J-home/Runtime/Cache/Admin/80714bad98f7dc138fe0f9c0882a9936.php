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
                <li class="list-group-item"><a href="<?php echo U('Good/good');?>"><i class="glyphicon glyphicon-th-large"></i>产品展示管理</a></li>
                <li class="list-group-item"><a href="<?php echo U('News/news');?>"><i class="glyphicon glyphicon-book"></i>文章管理</a></li>
                <li class="list-group-item"><a href="<?php echo U('Mjoin/Mjoin');?>"><i class="glyphicon glyphicon-user"></i>招聘管理</a></li>
                <li class="list-group-item"><a href="<?php echo U('Map/map');?>"><i class="glyphicon glyphicon-map-marker"></i>简馆地址管理</a></li>
                <li class="list-group-item"><a href="<?php echo U('Order/order');?>"><i class="glyphicon glyphicon-shopping-cart"></i>订单管理</a></li>
                <li class="list-group-item"><a href="<?php echo U('Banner/banner');?>"><i class="glyphicon glyphicon-bullhorn"></i>广告管理</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-9 content">
            <div class="M-news panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="glyphicon glyphicon-chevron-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> 产品管理</h3>
              </div>
              <div class="panel-body">
              	<form action="<?php echo U('Banner/update_banner');?>" method="post" enctype="multipart/form-data">
              		<input type="text" id="id" name="id" value="<?php echo ($bimg["id"]); ?>" hidden="hidden"/>
              		<input type="text" id="position" name="position" value="<?php echo ($bimg["position"]); ?>" hidden="hidden"/>
              		<h4>位置：<?php echo ($bimg["position"]); ?></h4>
              		<label for="title">图片：</label>
              		<div class="banner-update">
              			<span class="pic1">
	              			<img src="<?php echo ($bimg["img1"]); ?>" alt="" title="点击修改" />
              			</span>点击图片进行修改<br /><br />
              			<span class="pic2">
	              			<img src="<?php echo ($bimg["img2"]); ?>" alt="" title="点击修改"/>
              			</span>点击图片进行修改<br /><br />
              			<span class="pic3">
	              			<img src="<?php echo ($bimg["img3"]); ?>" alt="" title="点击修改"/>
              			</span>点击图片进行修改
              		</div><br />
              		<input type="file" name="pic[]" id="pic1" title="上传照片" onchange="getPhoto(this)"/>
              		<input type="file" name="pic[]" id="pic2" title="上传照片" onchange="getPhoto(this)"/>
              		<input type="file" name="pic[]" id="pic3" title="上传照片" onchange="getPhoto(this)"/>
              		<input type="submit" value="保存"/>
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
					//图片实时预览
        	var imgurl = "";  
			    function getPhoto(node) {  
			    	  var myid = node.id;
			        var imgURL = "";  
			        try{  
			            var file = null;  
			            if(node.files && node.files[0] ){  
			                file = node.files[0];  
			            }else if(node.files && node.files.item(0)) {  
			                file = node.files.item(0);  
			            }  
			            //Firefox 因安全性问题已无法直接通过input[file].value 获取完整的文件路径  
			            try{  
			                imgURL =  file.getAsDataURL();  
			            }catch(e){  
			                imgRUL = window.URL.createObjectURL(file);  
			            }  
			        }catch(e){  
			            if (node.files && node.files[0]) {  
			                var reader = new FileReader();  
			                reader.onload = function (e) {  
			                    imgURL = e.target.result;  
			                };  
			                reader.readAsDataURL(node.files[0]);  
			            }  
			        }  
			        creatImg(imgRUL,myid);  
			        return imgURL;  
			    }  
			  
			    function creatImg(imgRUL,myid){  
			        var textHtml = "<img src='"+imgRUL+"'height='300px'/>";  
			        $("."+myid).html(textHtml);  
			    }  
			    
			    $(function(){
			    	$(":file").hide();
				    
				    $(".banner-update span").click(function(){
				    	var myClass = $(this).attr("class");
				    	$("#"+myClass).click();
				    })
				    
					  $(":submit").click(function(){
					    $screenHeight = $(window).height();
				    	$screenWidth = $(window).width();
				    	$(".mask").css({"width":$screenWidth,"height":$screenWidth});
				    	$(".mask").show();
				    })
					  
			    })
			    
    </script>
  </body>
</html>