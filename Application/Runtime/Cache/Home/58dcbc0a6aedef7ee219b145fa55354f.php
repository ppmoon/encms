<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>个人网络FM播客管理系统</title>
    <!-- Bootstrap -->
    <!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="/encms/Public/Home/css/bootstrap.css">
    <link href="/encms/Public/Home/css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/encms/Public/Home/css/component.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link href="/encms/Public/Home/dist/skin/blue.monday/css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/encms/Public/Home/lib/jquery.min.js"></script>
	<script type="text/javascript" src="/encms/Public/Home/dist/jplayer/jquery.jplayer.min.js"></script>
</head>
<body><!--�������б�-->
<ul>
<?php if(is_array($blog)): foreach($blog as $key=>$v): ?><li><a href="/encms/index.php/Home/Index/music/id/<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>	
</ul>
</body>
</body>
</html>