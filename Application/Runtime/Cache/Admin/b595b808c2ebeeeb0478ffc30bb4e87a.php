<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<<html>
	<head>
	<title>后台</title>
	</head>
	<body>
		<li>
			<ul><a href="<?php echo U('Admin/Index/logout');?>">退出登录</a></ul>
		</li>
		<br/>
		<li>
			<ul><a href="<?php echo U('Admin/Blog/index');?>">博文列表</a></ul>
			<ul><a href="<?php echo U('Admin/Blog/blog');?>">添加博文</a></ul>
			<ul><a href="<?php echo U('Admin/Blog/trach');?>">回收站</a></ul>
			<ul><a href="<?php echo U('Admin/Category/index');?>">分类列表</a></ul>
			<ul><a href="<?php echo U('Admin/Category/addCate');?>">添加分类</a></ul>
		</li>
	</body>
</html>