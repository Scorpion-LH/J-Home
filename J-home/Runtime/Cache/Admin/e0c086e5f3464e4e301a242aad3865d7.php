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
          <div class="col-xs-12 col-sm-9 content">
            <div class="M-news panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="glyphicon glyphicon-chevron-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> 招聘管理</h3>
              </div>
              <div class="panel-body">
              	<form action="<?php echo U('News/update_news');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
              		<div class="form-group">
	              		<label for="bt" class="control-label col-md-1">标题：</label>
	              		<div class="col-md-4">
              			<input type="text" id="bt" class="form-control" name="title" value="<?php echo ($list["title"]); ?>" required="required"/>
              			</div>
		              </div><hr />
		              <div class="form-group">
              			<label for="fm" class="control-label col-md-1">封面：</label>
              			<div class="col-md-1">
	              			<button type="button" class="btn btn-default new-update">修改</button>
	              		</div>
	              		<div class="look col-md-12">
	              			<img src="<?php echo ($list["img"]); ?>" style="height: 150px;"/>
	              		</div>
              			<input type="file" name="img" id="fm" value="" title="上传照片" onchange="getPhoto(this)"/>
              		</div><hr />
              		<div class="form-group">
	              		<label for="ms" class="control-label col-sm-1">简述：</label>
	              		<textarea name="describe" rows="5" cols="50" class="form-control" required="required" style="width:400px;"><?php echo ($list["describe"]); ?></textarea><br /><hr />
	              	</div>
              		<label for="">文章内容：</label>
              			<script id="container" name="content" type="text/plain">
												<?php echo (htmlspecialchars_decode($list["content"])); ?>
										</script><br />
									<input type="text" name="id" value="<?php echo ($list["id"]); ?>" hidden="hidden" />
              		<input type="submit" class="btn btn-info btn-lg" value="保存"/>
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
        var ue = UE.getEditor('container',{
        	toolbars: [
					  ['fullscreen', 'source', 'undo','|', 'redo','bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript','|','fontsize','simpleupload','insertimage','|','emotion','spechars','|','pasteplain','lineheight','autotypeset'],
				    ['removeformat','formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc','horizontal','|','justifyleft','justifycenter','justifyright','imageleft','imageright']
					],  
				  initialFrameHeight:300,
				  enterTag:'' ,
				  saveInterval: 5000000
        });

					
					//图片实时预览
        	var imgurl = "";  
			    function getPhoto(node) {  
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
			        creatImg(imgRUL);  
			        return imgURL;  
			    }  
			  
			    function creatImg(imgRUL){  
			        var textHtml = "<img src='"+imgRUL+"'height='150px'/>";  
			        $(".look").html(textHtml);  
			    }  
			    
			    $(function(){
			    	$("#fm").hide();
			    	$(".new-update").click(function(){
				    	$("#fm").click();
				    });
				    
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