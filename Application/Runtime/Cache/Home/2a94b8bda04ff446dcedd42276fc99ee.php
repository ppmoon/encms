<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>立伟硅藻土</title>
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
</head>
<body>
	<div id="header">
		<div class="main">
				<div id="cbp-hrmenu" class="cbp-hrmenu">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
							<img width="200px" style="margin: 1em 2em;"src="/encms/Public/Home/img/logo.png">
							</div>
							<div class="col-md-4">
								<!-- <form style="margin-top:10px"class="navbar-form navbar-right" role="search">
							        <div class="form-group">
							          <input type="text" class="form-control" placeholder="搜索">
							        </div>
							        <button type="submit" class="btn btn-default">搜索</button>
							    </form> -->
							</div>
						</div>
					</div>
					<?php use Admin\Model\Category; $cate=M('cate')->order('sort')->select(); import("Admin.Model.Category"); $cate=Category::unlimitedForLayer($cate); ?>
					<ul class="container">
						<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><li>
								<a href="#"><?php echo ($v["name"]); ?></a>
								<if condition='$v["child"]'>
								<div class="cbp-hrsub">
									<div class="cbp-hrsub-inner container"> 
										<div>
											<?php if(is_array($v["child"])): foreach($v["child"] as $key=>$value): ?><h4><?php echo ($value["name"]); ?></h4>
													<ul>
														<li><a href="#">文章列表</a></li>
													</ul><?php endforeach; endif; ?>
										</div>
									</div><!-- /cbp-hrsub-inner -->
								</div><!-- /cbp-hrsub -->
							</li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>
<div class="jumbotron" id="jumbotron">
	<img class="img-responsive" alt="Responsive image" src="/encms/Public/Home/img/homebg.jpg">
	</div><!--jumbotron-->
	</div><!--header-->	
	<div class="container">
		<h1 id="exp" class="text-center">施工案例</h1>
		<h3 class="text-center">————    Construction case    ————</h3>
		<div class="row container" id="exp_until">
			<div class="col-md-4">
				<div style="width:300px;height:245px;margin-top:10px;">
					<a href="#">
	      			<img src="/encms/Public/Home/img/bg1.jpg" alt="1">
	    			</a>
	    			<div id="exp_one"><a herf="#">春之韵硅藻泥</a></div>
    			</div>
			</div>
			<div class="col-md-4">
				<div style="width:300px;height:245px;margin-top:10px;">
				<a href="#">
      			<img src="/encms/Public/Home/img/bg2.jpg" alt="2">
    			</a>
    			<div id="exp_one"><a herf="#">春之韵硅藻泥</a></div>
    			</div>
			</div>
			<div class="col-md-4">
				<div style="width:300px;height:245px;margin-top:10px;">
				<a href="#">
      			<img src="/encms/Public/Home/img/bg3.jpg" alt="2">
    			</a>
    			<div id="exp_one"><a herf="#">春之韵硅藻泥</a></div>
    			</div>
			</div>
		</div>
	</div><!--content-->
<div id="footer">
		<div  class="container" >
		<div class="row text-center" id="#exp_until">
			<div class="col-md-4" id="footer_text">
				<ul>
					<h3>关于我们</h3>
					<li><a href="#">招贤纳士</a></li>
					<li><a href="#">更多案例</a></li>
					<li><a href="#">关于我们</a></li>
				</ul>
			</div>
			<div class="col-md-4" id="footer_text">
				<ul style="list-style-type:none;">
					<h3>联系我们</h3>
					<li><span class="glyphicon glyphicon-phone">&nbsp;</span>手机：15843933309</li>
					<li><span class="glyphicon glyphicon-phone-alt">&nbsp;</span>传真：0439-5050369</li>
					<li><span class="glyphicon glyphicon-globe">&nbsp;</span>网址：www.cblwgzt.com</li>
					<li><span class="glyphicon glyphicon-envelope">&nbsp;</span>E-mail:ljtysx909@163.com</li>
					<li><span class="glyphicon glyphicon-map-marker">&nbsp;</span>邮编：134600</li>
					<li><span class="glyphicon glyphicon-home">&nbsp;</span>销售中心：吉林省临江市兴隆小区32号</li>
					<li><span class="glyphicon glyphicon-road">&nbsp;</span>厂址：吉林省长白县八道沟镇马鞍山村</li>

				</ul>
			</div>
			<div class="col-md-4" id="footer_text">
				<ul>
					<h3>扫码联系我们</h3>
					<img width="150px;"src="/encms/Public/Home/img/qrcode.png">
				</ul>
			</div>
		</div>
		</div>
	</div><!--footer-->
	<div id="footer_info">
		<p class="text-center">吉林省长白朝鲜族自治县立伟硅藻土综合制品有限公司&nbsp;&nbsp;&nbsp;吉ICP备13001641号-1</p>
	</div>
	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="/encms/Public/Home/js/modernizr.custom.js"></script>
	<script src="/encms/Public/Home/js/cbpHorizontalMenu.min.js"></script>
		<script>
			$(function() {
				cbpHorizontalMenu.init();
			});
		</script>
</body>
</html>