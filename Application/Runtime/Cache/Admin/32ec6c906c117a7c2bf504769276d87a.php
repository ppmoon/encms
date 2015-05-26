<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>嗯！FM</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link href="/encms/Public/Admin/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  </head>
  <body id="login_bg">
    <div class="text-center">
    <form id="login_form" action="<?php echo U('Admin/Login/login');?>" method="post">
    <h1 id="login_title"><b>嗯！FM</b></h1>
    <div class="input-group" id="input_group">
    <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-user"></span></span>
      <input type="text" name="username" class="form-control" placeholder="请输入用户名" aria-describedby="sizing-addon1">
    </div>
    <div class="input-group" id="input_group">
    <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-asterisk"></span></span>
      <input type="password" name="password" class="form-control" placeholder="请输入密码" aria-describedby="sizing-addon1">
    </div>
    <div class="input-group" id="input_group">
    <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-barcode"></span></span>
      <input type="text" name="verify" class="form-control" placeholder="请输入验证码" aria-describedby="sizing-addon1">
    </div>
    <img id="verify_img" alt="验证码" src="<?php echo U('Admin/Login/verify');?>" onClick="this.src='<?php echo U('Admin/Login/verify');?>/'+Math.random()">
    <input id="login_button" type="submit" class="btn btn-primary btn-lg btn-block" value="提交">
    </form>
    </div>
  </body>
</html>