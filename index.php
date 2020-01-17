<?php
header("content-type:text/html;charset=utf-8");
include "../public/config/config.php";
$diy="active";
?>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
	<title>我的DIY -- <?php echo $cfg_indexname;?></title>
	
	<!-- Bootstrap -->
	<link href="/public/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/public/css/main.css"/>
	
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
		<li class="active">我的DIY</li>
	</ol>
	<h3 class="text-center bg-primary lhei">我的DIY -- 导航</h3>
	<ul class="nav nav-pills">
	    <li class="active"><a href="#banner" data-toggle="tab">给大家看看</a></li>
	   	<li><a data-toggle="tab" href="#see_data">专业东西</a></li>
    	
	</ul>
	<hr />
	<div class="tab-content min_hei">
		<!--给大家看看-->
	    <div class="tab-pane active" id="banner">
	    	<h3>我的DIY&gt;&gt;给大家看看</h3>
	    	<div class="row">
	    		<div class="col-md-3">
		    		<a href="shudu/shudu.php" target="_blank">
		    			<h4 class="text-center">数独</h4>
		    			<div class="a_img"><img src="shudu/1.png" width="100%" height="100%"/></div>
		    		</a>
	    		</div>
	    		<div class="col-md-3">
		    		<a href="naoz/naoz.php" target="_blank">
		    			<h4 class="text-center">网页版在线定时计时器 - 闹钟</h4>
		    			<div class="a_img"><img src="naoz/1.png" width="100%" height="100%"/></div>
		    		</a>
	    		</div>
	    		<div class="col-md-3">
		    		<a href="qqlg_db/index.php" target="_blank">
		    			<h4 class="text-center">在这里登录一下QQ试试</h4>
		    			<div class="a_img"><img src="qqlg_db/1.png" width="100%" height="100%"/></div>
		    		</a>
	    		</div>
	    		<div class="col-md-3">
		    		<a href="tel/index.php" target="_blank">
		    			<h4 class="text-center">通讯集</h4>
		    			<div class="a_img"><img src="tel/0.png" width="100%" height="100%"/></div>
		    		</a>
	    		</div>
	    	</div>
	    	<div class="row">
	    		
	    	</div>
	    </div>
	    <!--专业东西-->
	    <div class="tab-pane" id="see_data">
	    	<h3>我的DIY&gt;&gt;专业东西</h3>
	    	<div class="row">
	    		<div class="col-md-3">
		    		<a href="time/time.php" target="_blank">
		    			<h4 class="text-center">时间戳和日期互换</h4>
		    			<div class="a_img"><img src="../public/imgs/0.jpg" width="100%" height="100%"/></div>
		    		</a>
	    		</div>
	    		<div class="col-md-3">
		    		<a href="ip_get_add/get_add.php" target="_blank">
		    			<h4 class="text-center">根据IP获取物理地址</h4>
		    			<div class="a_img"><img src="../public/imgs/0.jpg" width="100%" height="100%"/></div>
		    		</a>
	    		</div>
				<div class="col-md-3">
		    		<a href="mail" target="_blank">
		    			<h4 class="text-center">自动发邮件</h4>
		    			<div class="a_img"><img src="../public/imgs/0.jpg" width="100%" height="100%"/></div>
		    		</a>
	    		</div>
	    		<div class="col-md-3">
		    		<a href="bat" target="_blank">
		    			<h4 class="text-center">.BAT</h4>
		    			<div class="a_img"><img src="../public/imgs/0.jpg" width="100%" height="100%"/></div>
		    		</a>
	    		</div>
	    	</div>
	    	
	    	<div class="row">
	    		
	    		
	    	</div>
	    </div>
	    
	    
	</div>
</div>
<?php include "../public/include/footer.php";?>
<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script type="text/javascript" src="/public/js/jquery-3.3.1.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/public/js/footer.js"></script>
</body>
</html>