<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>立伟硅藻土后台的登录</title>
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
<script>
	window.UEDITOR_HOME_URL = "/encms/Public/ueditor/";
	window.onload = function (){
		UE.getEditor('content');
	}
	</script>
	<script type="text/javascript" src="/encms/Public/ueditor/ueditor.config.js"></script>
	<script type="text/javascript" src="/encms/Public/ueditor/ueditor.all.min.js"></script>
<body>
    <div id="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">用户名称</div>
          <div class="col-md-4 text-right"><a href="<?php echo U('Admin/Index/logout');?>">退出登录</a></div>
        </div>
      </div>
    </div><!--header-->
    <div class="container-fluid">
      <div class="row">
      <div class="col-md-3" id="slider_nav">
          <ul class="nav navbar-inverse nav-stacked text-left">
          <li><a href="<?php echo U('Admin/Blog/index');?>"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;文章管理</a></li>
          <li><a href="<?php echo U('Admin/Blog/blog');?>"><span class="glyphicon glyphicon-file"></span>&nbsp;&nbsp;添加文章</a></li>
            <li><a href="<?php echo U('Admin/Blog/trach');?>"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;回收站</a></li>
            <li><a href="<?php echo U('Admin/Category/index');?>"><span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;分类管理</a></li>
            <li><a href="<?php echo U('Admin/Category/addCate');?>"><span class="glyphicon glyphicon-indent-left"></span>&nbsp;&nbsp;添加分类</a></li>
          </ul><!--nav--><!--slider-->
      </div>
      <div class="col-md-9">
	<form action="<?php echo U('Admin/Blog/addBlog');?>" method="post">
    <table class="table">
      <tr>
        <th colspan="2">博文发布</th>
      </tr>
      <tr>
        <td align="right" width="10%">所属分类：</td>
        <td>
          <select name="cid">
						<option value="">===请选择分类===</option>
						<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); echo ($v["name"]); ?></option><?php endforeach; endif; ?>
		  </select>
        </td>
      </tr>
      <tr>
        <td align="right">标题：</td>
        <td>
          <input type="text" name="title"/>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <textarea name="content" id="content"></textarea>
        </td>
      </tr>
      <tr>
        <td align="center" colspan="2">
          <input type="submit" value="保存博文"/>
        </td>
      </tr>
    </table>
  	</form>
</div><!--content-->
      </div>
    </div><!--center-->
    </div>
  </body>
</html>
<!-- <!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<title>添加博文页面</title>
	<script>
	window.UEDITOR_HOME_URL = "/encms/Public/ueditor/";
	window.onload = function (){
		UE.getEditor('content');
	}
	</script>
	<script type="text/javascript" src="/encms/Public/ueditor/ueditor.config.js"></script>
	<script type="text/javascript" src="/encms/Public/ueditor/ueditor.all.min.js"></script>
	
</head>
<body>
	<form action="<?php echo U('Admin/Blog/addBlog');?>" method="post">
		<table border="1">
			<tr>
				<th colspan="2">博文发布</th>
			</tr>
			<tr>
				<td align="right" width="10%">所属分类：</td>
				<td>
					<select name="cid">
						<option value="">===请选择分类===</option>
						<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); echo ($v["name"]); ?></option><?php endforeach; endif; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td align="right">标题：</td>
				<td>
					<input type="text" name="title"/>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<textarea name="content" id="content"></textarea>
				</td>
			</tr>
			<tr>
				<td align="center" colspan="2">
					<input type="submit" value="保存博文"/>
				</td>
			</tr>
		</table>
	</form>
</body>
</html> -->