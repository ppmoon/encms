<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
  	<meta charset="utf-8"/>
  	<title>登录页面</title>
  </head>
  <body>
  	<form action="<?php echo U('Admin/Login/login');?>" method="post">
  		<p>用户名: <input type="text" name="username" /></p>
  		<p>密码: <input type="password" name="password" /></p>
  		<img alt="验证码" src="<?php echo U('Admin/Login/verify');?>" onClick="this.src='<?php echo U('Admin/Login/verify');?>/'+Math.random()" />
  		<p>验证码: <input type="text" name="verify" /></p>
  		<input type="submit" value="提交" />
  	</form>
  </body>
</html>