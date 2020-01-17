<?php
header("content-type:text/html;charset=utf-8");
include "../public/config/config.php";
include "../public/include/funcs.php";
$link=conn($cfg_dbhost,$cfg_dbuser,$cfg_dbpwd,$cfg_dbname,$cfg_dbchar);
$arr=select($link, 'fl');
$fl="active";
?>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
	<title>flash动画列表 -- <?php echo $cfg_indexname;?></title>
	<meta name="description" content="汪观富的个人网站"/>
	<meta name="keywords" content="汪观富的个人网站,汪观富网,汪观富的flash动画列表"/>
	
	<!-- Bootstrap -->
	<link href="../public/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../public/css/main.css"/>
	
	<!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
	<!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
	<!--[if lt IE 9]>
	<script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<?php include "../public/include/head.php";?>
<div class="container">
	<ol class="breadcrumb bg_eee">
		<li><a href="/index.php">首页</a></li>
		<li class="active">flash动画列表</li>
	</ol>
	<h3 class="text-center bg-primary lhei">flash动画列表</h3>
	<hr />
	<div class="mar_b">
    	<h3>按时间顺序：</h3>
<?php
foreach($arr as $v){
?>
    	<div class="row row_css">
    		<a href="content.php?id=<?php echo $v['id']?>" target="_blank">
    			<h4 class="text-center"><?php echo $v['cname']?></h4>
	    		<div class="col-md-3">
		    		<div class="img-thumbnail a_img"><img src="/files/fl/<?php echo $v['yname']?>.png" width="100%" height="100%"/></div>
	    		</div>
	    		<div class="col-md-9 description">
	    			<p><?php echo $v['description']?></p>
	    		</div>
    		</a>
    	</div>
<?php
}
?>
	</div>
</div>
<?php include "../public/include/footer.php";?>
<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script type="text/javascript" src="../public/js/jquery-3.3.1.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script type="text/javascript" src="../public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/public/js/footer.js"></script>
</body>
</html>