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
              	<form action="<?php echo U('Good/update_good');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
              		<input type="text" id="id" name="id" value="<?php echo ($list["id"]); ?>" hidden="hidden"/>
              		<div class="pull-right">
	              		<input type="submit" class="btn btn-info btn-lg" value="保存"/>
              		</div>
              		<div class="form-group">
	              		<label for="title" class="control-label col-md-1">分类：</label>
	              		<div class="col-md-2">
		              		<select name="title" class="form-control">
		              			<option value="<?php echo ($list["title"]); ?>" selected="selected"><?php echo ($list["title"]); ?></option>
		              			<?php if(is_array($allClass)): $i = 0; $__LIST__ = $allClass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><option value="<?php echo ($c["title"]); ?>"><?php echo ($c["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		              		</select>
		              	</div>
              		</div><hr />
              		<div class="form-group">
	              		<label for="name" class="control-label col-md-1">名称：</label>
	              		<div class="col-md-2">
	              			<input type="text" id="name" class="form-control" name="name" value="<?php echo ($list["name"]); ?>" required="required"/>
	              		</div>
	              		<div class="col-md-2">
	              			<input type="text" id="bt" class="form-control" name="sname" value="<?php echo ($list["sname"]); ?>" />
	              		</div>
              		</div><hr />
		              <div class="form-group">
	              		<label for="huohao" class="control-label col-md-1">货号：</label>
	              		<div class="col-md-2">
	              			<input type="text" id="huohao" class="form-control" name="huohao" value="<?php echo ($list["huohao"]); ?>" required="required"/>
	              		</div>	
              		</div><hr />
		              <div class="form-group">
	              		<label for="price" class="control-label col-md-1">价格：</label>
	              		<div class="col-md-2">
	              			<input type="text" id="price" class="form-control" name="price" value="<?php echo (sprintf('%.2f',$list["price"])); ?>" required="required"/>
	              		</div>	
              		</div><hr />
              		<div class="form-group">
	              		<label for="fm" class="control-label col-md-1">封面：</label>
	              		<div class="col-md-1">
	              			<button type="button" class="btn btn-default new-update">修改</button>
	              		</div>
	              		<div class="pic0 col-md-12">
              				<img src="<?php echo ($list["thumbnail"]); ?>" style="height: 150px;"/>
	              		</div>
	              		<input type="file" name="thumbnail" id="pic0" value="" title="上传照片" onchange="getPhoto(this)"/>
              		</div><hr />
              		<div class="form-group">
	              		<label for="title" class="control-label col-sm-2">产品图片（最多七张）：</label>
	              		<div class="good-update col-sm-12">
	              			<span class="pic1">
	              			<?php if(!empty($gimg['pic1'])): ?><img src="<?php echo ($gimg["pic1"]); ?>" alt="" title="点击修改" />
		              			<?php else: ?> 
		              			<img src="/myBS/Public/img/plus.jpg"/><?php endif; ?>
	              			</span>
	              			<span class="pic2">
	              			<?php if(!empty($gimg['pic2'])): ?><img src="<?php echo ($gimg["pic2"]); ?>" alt="" title="点击修改"/>
		              			<?php else: ?> 
		              			<img src="/myBS/Public/img/plus.jpg"/><?php endif; ?>
	              			</span>
	              			<span class="pic3">
	              			<?php if(!empty($gimg['pic3'])): ?><img src="<?php echo ($gimg["pic3"]); ?>" alt="" title="点击修改"/>
		              			<?php else: ?> 
		              			<img src="/myBS/Public/img/plus.jpg"/><?php endif; ?>
	              			</span>
	              			<span class="pic4">
	              			<?php if(!empty($gimg['pic4'])): ?><img src="<?php echo ($gimg["pic4"]); ?>" alt="" title="点击修改"/>
		              			<?php else: ?> 
		              			<img src="/myBS/Public/img/plus.jpg"/><?php endif; ?>
	              			</span>
	              			<span class="pic5">
	              			<?php if(!empty($gimg['pic5'])): ?><img src="<?php echo ($gimg["pic5"]); ?>" alt="" title="点击修改"/>
		              			<?php else: ?> 
		              			<img src="/myBS/Public/img/plus.jpg"/><?php endif; ?>
	              			</span>
	              			<span class="pic6">
	              			<?php if(!empty($gimg['pic6'])): ?><img src="<?php echo ($gimg["pic6"]); ?>" alt="" title="点击修改"/>
		              			<?php else: ?> 
		              			<img src="/myBS/Public/img/plus.jpg"/><?php endif; ?>
	              			</span>
	              			<span class="pic7">
	              			<?php if(!empty($gimg['pic7'])): ?><img src="<?php echo ($gimg["pic7"]); ?>" alt="" title="点击修改"/>
		              			<?php else: ?> 
		              			<img src="/myBS/Public/img/plus.jpg"/><?php endif; ?>
	              			</span>
	              		</div>
	              		<input type="file" name="pic[]" id="pic1" title="上传照片" onchange="getPhoto(this)"/>
	              		<input type="file" name="pic[]" id="pic2" title="上传照片" onchange="getPhoto(this)"/>
	              		<input type="file" name="pic[]" id="pic3" title="上传照片" onchange="getPhoto(this)"/>
	              		<input type="file" name="pic[]" id="pic4" title="上传照片" onchange="getPhoto(this)"/>
	              		<input type="file" name="pic[]" id="pic5" title="上传照片" onchange="getPhoto(this)"/>
	              		<input type="file" name="pic[]" id="pic6" title="上传照片" onchange="getPhoto(this)"/>
	              		<input type="file" name="pic[]" id="pic7" title="上传照片" onchange="getPhoto(this)"/>
              		</div><hr />
              		<div class="form-group">
	              		<label for="guige1_text" class="control-label col-md-1">规格1：</label>
	              		<div class="col-md-2">
              				<input type="text" id="guige1_name" class="form-control" name="guige1_name" value="<?php echo ($list["guige1_name"]); ?>"/>
              			</div>
	              		<div class="col-md-4">
              				<input type="text" id="guige1_text" class="form-control" name="guige1_text" value="<?php echo ($list["guige1_text"]); ?>"/>
										</div>              				
              			<label class="control-label col-md-4" style="text-align: left;">（多个选项请用英文逗号“,”分隔）</label>
              		</div><hr />
              		<div class="form-group">
	              		<label for="guige2_text" class="control-label col-md-1">规格2：</label>
	              		<div class="col-md-2">
              				<input type="text" id="guige2_name" class="form-control" name="guige2_name" value="<?php echo ($list["guige2_name"]); ?>"/>
              			</div>
	              		<div class="col-md-4">
              				<input type="text" id="guige2_text" class="form-control" name="guige2_text" value="<?php echo ($list["guige2_text"]); ?>"/>
										</div>              				
              			<label class="control-label col-md-4" style="text-align: left;">（多个选项请用英文逗号“,”分隔）</label>
              		</div><hr />
              		<div class="form-group">
	              		<label for="guige3_text" class="control-label col-md-1">规格3：</label>
	              		<div class="col-md-2">
              				<input type="text" id="guige3_name" class="form-control" name="guige3_name" value="<?php echo ($list["guige3_name"]); ?>"/>
              			</div>
	              		<div class="col-md-4">
              				<input type="text" id="guige3_text" class="form-control" name="guige3_text" value="<?php echo ($list["guige3_text"]); ?>"/>
										</div>              				
              			<label class="control-label col-md-4" style="text-align: left;">（多个选项请用英文逗号“,”分隔）</label>
              		</div><hr />
              		<label for="describe">描述：</label>
              			<script id="describe" name="describe" type="text/plain"><?php echo (htmlspecialchars_decode($list["describe"])); ?></script><br />
              		<label for="tezheng">特征：</label>
              			<script id="tezheng" name="tezheng" type="text/plain"><?php echo (htmlspecialchars_decode($list["tezheng"])); ?></script><br />
              		<label for="size">参考尺寸：</label>
              			<script id="size" name="size" type="text/plain"><?php echo (htmlspecialchars_decode($list["size"])); ?></script><br />
              		<label for="baoyang">保养信息：</label>
              			<script id="baoyang" name="baoyang" type="text/plain"><?php echo (htmlspecialchars_decode($list["baoyang"])); ?></script><br />
              		<label for="huanbao">环保信息：</label>
              			<script id="huanbao" name="huanbao" type="text/plain"><?php echo (htmlspecialchars_decode($list["tezheng"])); ?></script><br />
              		<label for="tip">相关提示：</label>
              			<script id="tip" name="tip" type="text/plain"><?php echo (htmlspecialchars_decode($list["tip"])); ?></script><br />
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
    	function ueditor_get(id){
        var ue = UE.getEditor(id,{
        	toolbars: [
					  ['fullscreen', 'source', 'undo','|', 'redo','bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript','|','fontsize','simpleupload','insertimage','|','emotion','spechars','|','pasteplain','lineheight','autotypeset'],
				    ['removeformat','formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc','horizontal','|','justifyleft','justifycenter','justifyright','imageleft','imageright']
					],  
				  initialFrameHeight:300,
				  enterTag:'' ,
				  saveInterval: 5000000
        });
			}
			
			ueditor_get('describe');
			ueditor_get('tezheng');
			ueditor_get('size');
			ueditor_get('baoyang');
			ueditor_get('huanbao');
			ueditor_get('tip');
					
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
			        var textHtml = "<img src='"+imgRUL+"'height='150px'/>";  
			        $("."+myid).html(textHtml);  
			    }  
			    
			    $(function(){
			    	$(":file").hide();
			    	$(".new-update").click(function(){
				    	$("#pic0").click();
				    });
				    
				    $(".good-update span").click(function(){
				    	var myClass = $(this).attr("class");
				    	$("#"+myClass).click();
				    })
				    
					  $(":submit").click(function(){
			  			if($("#stitle").val() != "" && $("#name").val() != "" && $("#bt").val() != "" && $("#huohao").val() != "" && $("#price").val() != ""){
			  				$screenHeight = $(window).height();
					    	$screenWidth = $(window).width();
					    	$(".mask").css({"width":$screenWidth,"height":$screenWidth});
					    	$(".mask").show();
			  			}
				    });
					  
			    })
			    
    </script>
  </body>
</html>