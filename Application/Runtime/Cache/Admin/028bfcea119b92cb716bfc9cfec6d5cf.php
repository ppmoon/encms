<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
</html>