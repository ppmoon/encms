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
          <li><a href="<?php echo U('Admin/Blog/index');?>"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;音频管理</a></li>
          <li><a href="<?php echo U('Admin/Blog/blog');?>"><span class="glyphicon glyphicon-file"></span>&nbsp;&nbsp;添加音频</a></li>
            <li><a href="<?php echo U('Admin/Blog/trach');?>"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;回收站</a></li>
            <li><a href="<?php echo U('Admin/Category/index');?>"><span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;分类管理</a></li>
            <li><a href="<?php echo U('Admin/Category/addCate');?>"><span class="glyphicon glyphicon-indent-left"></span>&nbsp;&nbsp;添加分类</a></li>
          </ul><!--nav--><!--slider-->
      </div>
      <div class="col-md-9">
<form action="<?php echo U('Admin/Category/sortCate');?>" method="post">
    <table class="table table-hover">
      <tr>
        <th>ID</th>
        <th>标题</th>
        <th>所属分类</th>
        <th>排序</th>
        <th>操作</th>
      </tr>
      <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><tr>
					<td><?php echo ($v["id"]); ?></td>
					<td><?php echo ($v["html"]); echo ($v["name"]); ?></td>
					<td><?php echo ($v["level"]); ?></td>
					<td>
						<input type="text" name="<?php echo ($v["id"]); ?>" value="<?php echo ($v["sort"]); ?>" />
					</td>
					<td>
						
						[<a href="<?php echo U('Admin/Category/editCate',array('id'=>$v['id']));?>">修改</a>]
						[<a href="<?php echo U('Admin/Category/delCate',array('id'=>$v['id']));?>">删除</a>]
					</td>
				</tr><?php endforeach; endif; ?>
    </table>
    <div class="text-center">
    <input  class="btn btn-primary"type="submit" value="排序"/>
    </div>
</form>
</div><!--content-->
      </div>
    </div><!--center-->
    </div>
  </body>
</html>