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
	<link href="/encms/Public/Home/dist/skin/blue.monday/css/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/encms/Public/Home/lib/jquery.min.js"></script>
	<script type="text/javascript" src="/encms/Public/Home/dist/jplayer/jquery.jplayer.min.js"></script>
</head>
<body id="bfont">

	<div class="container text-center">
		<h1>专辑</h1>
		<div class="row">
			<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><div class="col-md-4">
				<div id="cateBlock">
					<div class="thumbnail">
						<div id="cheight">
						<a id="catea" href="/encms/index.php/Home/Index/info/id/<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></a>
						</div>
					</div>
				</div>
			</div><?php endforeach; endif; ?>	
		</div>
	</div>
</body>
</html>