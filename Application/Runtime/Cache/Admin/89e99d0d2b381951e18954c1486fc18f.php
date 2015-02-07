<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>博客列表</title>
</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>标题</th>
			<th>所属分类</th>
			<th>发布时间</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($blog)): foreach($blog as $key=>$v): ?><tr>
			<td><?php echo ($v["id"]); ?></td>
			<td><?php echo ($v["title"]); ?></td>
			<td><?php echo ($v["cate"]); ?></td>
			<td><?php echo (date('y-m-d H:i',$v["time"])); ?></td>
			<td>[<a href="#">修改</a>]</td>
			<td>[<a href="<?php echo U('Admin/Blog/toTrach',array('id'=>$v['id']));?>">删除</a>]</td>
		</tr><?php endforeach; endif; ?>
	</table>
</body>
</html>