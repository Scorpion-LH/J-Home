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
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="glyphicon glyphicon-chevron-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> 产品管理</h3>
              </div>
              <div class="panel-body">
              	<form action="<?php echo U('Good/add_good');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
              		<input type="text" id="id" name="id" value="<?php echo ($list["id"]); ?>" hidden="hidden"/>
              		<div class="form-group">
	              		<label for="title" class="control-label col-md-1">分类：</label>
	              		<div class="col-md-2">
											<select name="room" id="room" class="form-control ">
		              			<option>--请选择房间--</option>
		              			<?php if(is_array($room)): $i = 0; $__LIST__ = $room;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><option value="<?php echo ($r["id"]); ?>"><?php echo ($r["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		              		</select>
	              		</div>
	              		<div class="col-md-2">
		              		<select name="btitle" id="btitle" class="form-control">
												<option>--请选择分类--</option>
		              		</select>
		              	</div>
		              	<div class="col-md-2">
		              		<select name="stitle" id="stitle" required="required" class="form-control col-md-2">
		              			<option>--请选择分类--</option>
		              		</select>
			              </div>
		              </div><hr />
		              <div class="form-group">
	              		<label for="name" class="control-label col-md-1">名称：</label>
	              		<div class="col-md-2">
	              			<input type="text" id="name" class="form-control" name="name" value="" required="required"/>
	              		</div>
	              		<div class="col-md-2">
	              			<input type="text" id="bt" class="form-control" name="sname" value="" />
	              		</div>
              		</div><hr />
		              <div class="form-group">
	              		<label for="huohao" class="control-label col-md-1">货号：</label>
	              		<div class="col-md-2">
	              			<input type="text" id="huohao" class="form-control" name="huohao" value="" required="required"/>
	              		</div>	
              		</div><hr />
		              <div class="form-group">
	              		<label for="price" class="control-label col-md-1">价格：</label>
	              		<div class="col-md-2">
	              			<input type="text" id="price" class="form-control" name="price" value="" required="required"/>
	              		</div>	
              		</div><hr />
		              <div class="form-group">
	              		<label for="fm" class="control-label col-md-1">封面：</label>
	              		<div class="col-md-1">
	              			<button type="button" class="btn btn-default new-update">添加</button>
	              		</div>
	              		<div class="pic0 col-md-12"></div>
	              		<input type="file" name="thumbnail" id="pic0" value="" title="上传照片" onchange="getPhoto(this)"/>
              		</div><hr />
              		<div class="form-group">
	              		<label for="title" class="control-label col-sm-2">产品图片（最多七张）：</label>
	              		<div class="good-update col-sm-12">
	              			<span class="pic1"><img src="/myBS/Public/img/plus.jpg"/></span>
	              			<span class="pic2"><img src="/myBS/Public/img/plus.jpg"/></span>
	              			<span class="pic3"><img src="/myBS/Public/img/plus.jpg"/></span>
	              			<span class="pic4"><img src="/myBS/Public/img/plus.jpg"/></span>
	              			<span class="pic5"><img src="/myBS/Public/img/plus.jpg"/></span>
	              			<span class="pic6"><img src="/myBS/Public/img/plus.jpg"/></span>
	              			<span class="pic7"><img src="/myBS/Public/img/plus.jpg"/></span>
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
              				<input type="text" id="guige1_name" class="form-control" name="guige1_name" value=""/>
              			</div>
	              		<div class="col-md-4">
              				<input type="text" id="guige1_text" class="form-control" name="guige1_text" value=""/>
										</div>              				
              			<label class="control-label col-md-4" style="text-align: left;">（多个选项请用英文逗号“,”分隔）</label>
              		</div><hr />
              		<div class="form-group">
	              		<label for="guige2_text" class="control-label col-md-1">规格2：</label>
	              		<div class="col-md-2">
              				<input type="text" id="guige2_name" class="form-control" name="guige2_name" value=""/>
              			</div>
	              		<div class="col-md-4">
              				<input type="text" id="guige2_text" class="form-control" name="guige2_text" value=""/>
										</div>              				
              			<label class="control-label col-md-4" style="text-align: left;">（多个选项请用英文逗号“,”分隔）</label>
              		</div><hr />
              		<div class="form-group">
	              		<label for="guige3_text" class="control-label col-md-1">规格3：</label>
	              		<div class="col-md-2">
              				<input type="text" id="guige3_name" class="form-control" name="guige3_name" value=""/>
              			</div>
	              		<div class="col-md-4">
              				<input type="text" id="guige3_text" class="form-control" name="guige3_text" value=""/>
										</div>              				
              			<label class="control-label col-md-4" style="text-align: left;">（多个选项请用英文逗号“,”分隔）</label>
              		</div><hr />
              		<label for="describe">描述：</label>
              			<script id="describe" name="describe" type="text/plain"></script><br />
              		<label for="tezheng">特征：</label>
              			<script id="tezheng" name="tezheng" type="text/plain"></script><br />
              		<label for="size">参考尺寸：</label>
              			<script id="size" name="size" type="text/plain"></script><br />
              		<label for="baoyang">保养信息：</label>
              			<script id="baoyang" name="baoyang" type="text/plain"></script><br />
              		<label for="huanbao">环保信息：</label>
              			<script id="huanbao" name="huanbao" type="text/plain"></script><br />
              		<label for="tip">相关提示：</label>
              			<script id="tip" name="tip" type="text/plain"></script><br />
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
    <script type="text/javascript" src="/myBS/Public/js/site.min.js"></script>
    <script src="/myBS/Public/ueditor/ueditor.config.js" type="text/javascript" charset="utf-8"></script>
    <script src="/myBS/Public/ueditor/ueditor.all.js" type="text/javascript" charset="utf-8"></script>
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
				    
				    //价格和货号只能输入数字和小数点
				    $("#price,#huohao").keyup(function(){    
                $(this).val($(this).val().replace(/[^0-9.]/g,''));    
            }).on("paste",function(){  //CTR+V事件处理    
                $(this).val($(this).val().replace(/[^0-9.]/g,''));     
            }).css("ime-mode", "disabled"); //CSS设置输入法不可用    
				    
				    $(".good-update span").click(function(){
				    	var myClass = $(this).attr("class");
				    	$("#"+myClass).click();
				    })
				    
				    $('#room').change(function(){
			        $.ajax({
			            type:"post",
			            url:"<?php echo U('Good/goodadd');?>",
			            data:'pid='+$('#room').val(),
			            dataType:"json",
			            success:function(data){
			                $('#btitle').html(data);
			            }
			        });
			    	});
			    	
				    $('#btitle').change(function(){
			        $.ajax({
			            type:"post",
			            url:"<?php echo U('Good/goodadd');?>",
			            data:'pid='+$('#btitle').val(),
			            dataType:"json",
			            success:function(data){
			                $('#stitle').html(data);
			            }
			        });
			    	});
			    	
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