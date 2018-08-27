<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>登录-简家后台管理系统</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" href="/myBS/Public/img/J-home-logo-08.png"/>
    <!-- site css -->
    <link rel="stylesheet" href="/myBS/Public/css/site.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&subset=latin,latin-ext" rel="stylesheet">
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="/myBS/Public/js/site.min.js"></script>
    <style>
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #303641;
        color: #C1C3C6
      }
    </style>
  </head>
  <body>
    <div class="container">
      <form class="form-signin" method="post" role="form" action="<?php echo U('Index/admin_login');?>" style="margin-bottom: 80px;">
      	<h1 style="margin: 60px 0;">简家后台管理系统</h1>
        <h3 class="form-signin-heading">Please sign in</h3>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="glyphicon glyphicon-user"></i>
            </div>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" required="required"/>
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="glyphicon glyphicon-lock "></i>
            </div>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off"  required="required"/>
          </div>
        </div>
        
				<div class="form-group" style="position: relative;">
          <div class="input-group">
          	<div class="input-group-addon">
              <i class="glyphicon glyphicon-magnet"></i>
            </div>
		        <input type="text" id="verify"  name="code"  class="form-control" placeholder="请输入验证码" style="width: 160px;" required="required"/>
		      </div>
					<img id="veirfyImg" src="<?php echo U('Index/verify');?>" onClick="changeVerify()" title="点击刷新验证码"  style="width: 210px;height: 41px; position: absolute; left: 210px;top:0px;cursor: pointer;"/>
        </div>
        <!--<label class="checkbox">
          <input type="checkbox" value="remember-me"> &nbsp Remember me
        </label>-->
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div>
    <div class="clearfix"></div>
    <br><br>
    <!--footer-->
    <div class="site-footer login-footer">
      <div class="container">
        <div class="copyright clearfix text-center">
          <p><b>简家</b>&nbsp;&nbsp;&nbsp;&nbsp;</p>
          <p>珠海简家家居企业股份有限公司</p>
        </div>
      </div>
    </div>
    
    <script type="text/javascript">
    	function changeVerify(){
        document.getElementById("veirfyImg").src = document.getElementById("veirfyImg").src+"?id="+Math.random();
    	}
    </script>
    
  </body>
</html>