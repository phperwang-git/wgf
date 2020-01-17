<?php
header("content-type:text/html;charset=utf-8");
session_start();
include "../public/config/config.php";
include "../public/include/funcs.php";
$fl="active";
//if($_POST['tname']){
//	$_SESSION['tname']=$_POST['tname'];
//}
//echo "名字：".$_SESSION['tname'];
$id=$_REQUEST['id'];
$url=$_SERVER['REQUEST_URI'];
if(!$_SESSION['tname'] && !$_POST['tname']){
	echo "<script>";
	echo "alert('你还没有登录，建议登录获取更多功能。');";
//	echo "alert('要登录了才能观看flash动画。');";
//	echo "window.location.href='/login.php?url=".$url."';";
	echo "</script>";
}
$link=conn($cfg_dbhost,$cfg_dbuser,$cfg_dbpwd,$cfg_dbname,$cfg_dbchar);
if($_POST['body']){
	$arr_add['fl_id']=$id;
	if($_POST['tname']){
		$arr_add['tname']="游客 - ".$_POST['tname'];
		$_SESSION['tname']="游客 - ".$_POST['tname'];
	}else{
		$arr_add['tname']=$_SESSION['tname'];
	}
	$arr_add['body']=$_POST['body'];
	$re=add($link, 'fl_lyb', $arr_add);
	if($re){
		echo "<script>";
		echo "alert('留言添加成功！');";
		echo "window.location.href='content.php?id=".$id."';";
		echo "</script>";
	}
}
if(!$id){
	echo "<script>";
	echo "alert('缺少参数！');";
	echo "window.location.href='index.php';";
	echo "</script>";
}

$arr=select($link, 'fl',"id=$id");
$arr_lyb=select($link, 'fl_lyb',"fl_id=$id");

//echo "<pre>";
//print_r($arr_lyb);
//echo "</pre>";


?>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
	<title><?php echo $arr[0]['cname']?> -- fl动画 -- <?php echo $cfg_indexname;?></title>
	<meta name="description" content="汪观富的个人网站"/>
	<meta name="keywords" content="汪观富的个人网站,汪观富网,汪观富的flash动画,<?php echo $arr[0]['cname']?>"/>
	
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
		<li><a href="/fl">flash动画列表</a></li>
		<li class="active"><?php echo $arr[0]['cname']?></li>
	</ol>
	<h3 class="text-center bg-primary lhei"><?php echo $arr[0]['cname']?></h3>
	<hr />
	<div class="row row_css">
		<div class="description">
			<p class="text_2em"><?php echo $arr[0]['description']?></p>
		</div>
		<div class="video">
			<video autoplay="autoplay" src="/files/fl/<?php echo $arr[0]['yname']?>" width="100%" controls="controls"></video>
		</div>
	</div>
	<div class="row">
		<h4 class="text-center bg-primary lhei">留言板</h4>
		<div id="lyb_from" class="lyb_form">
			<p>欢迎<span id="red"><?php echo $_SESSION['tname'];?></span>留言：</p>
			<form action="content.php" method="post">
<?php
	if(!$_SESSION['tname']){
				echo '你的姓名：<input type="text" name="tname" value="" /><br /><br />';
	}
?>
				
				<input type="hidden" name="id" value="<?php echo $id;?>" />
				<textarea style="width: 100%; height: 100px;" name="body" id="text_body" rows="10" cols="50"></textarea><br /><br />
				<input class="btn btn-info" type="submit" value="提交留言"/>
			</form>
		</div>
		<div class="lyb">
<?php
if($arr_lyb){
	$i=0;
	foreach($arr_lyb as $v){
		$i++;
?>
			<div class="lyb_cell">
				<h4><?php echo $i;?>楼：<span id="red"><?php echo $v['tname']?></span></h4>
				<p class="text_2em"><?php echo $v['body']?></p>
				<p class="float_r"><?php echo $v['calltime']?></p>
			</div>

<?php
	}
}else{
	echo '<div class="lyb_cell">现在没有任何评论，赶紧抢占1楼！</div>';
}
?>
		</div>
	</div>
</div>
<?php include "../public/include/footer.php";?>
<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script type="text/javascript" src="../public/js/jquery-3.3.1.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script type="text/javascript" src="../public/js/bootstrap.min.js"></script>
<script type="text/javascript">
var tname="<?php echo $_SESSION['tname']?>";
//if(tname==""){
//	$("#text_body").click(function(){
//		alert("要登录了才能评论！");
//		window.location.href='/login.php?url=<?php //echo $url;?>';
//	});
//}
</script>
<script type="text/javascript" src="/public/js/footer.js"></script>
</body>
</html>