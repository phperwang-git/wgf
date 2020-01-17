<?php
header("content-type:text/html;charset=utf-8");
include "./public/config/config.php";
?>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
	<title>wgf的首页 -- <?php echo $cfg_indexname;?></title>
	<meta name="description" content="汪观富的个人网站"/>
	<meta name="keywords" content="汪观富的个人网站,汪观富网,汪观富首页"/>
	
	<!-- Bootstrap -->
	<link href="/public/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/public/css/main.css"/>
	<link rel="stylesheet" type="text/css" href="/public/css/index.css"/>
	
	<!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
	<!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
	<!--[if lt IE 9]>
	<script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<?php include "./public/include/head.php";?>
<div class="container min_hei">
	<div class="row">
		<h4 class="text-center bg-primary lhei">首页主体部分</h4>
		<p class="p_1">这儿该放些什么呢？</p>
		<p class="p_2">想了很久</p>
		<p class="p_3">就是没个结果</p>
		<p class="p_4">算了吧，就一句：</p>
		<p class="p_5">Hello everyone !</p>
		<p class="p_6">-- The End ! --</p>
	</div>
</div>
<?php include "./public/include/footer.php";?>
<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script type="text/javascript" src="/public/js/jquery-3.3.1.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/public/js/footer.js"></script>
</body>
</html>