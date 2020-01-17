<?php
header("content-type:text/html;charset=utf-8");
session_start();
include "./public/config/config.php";
include "./public/include/funcs.php";
$prev_url=$_REQUEST['url'];
$next_url=$prev_url ? $prev_url : "/";
$link=conn($cfg_dbhost,$cfg_dbuser,$cfg_dbpwd,$cfg_dbname,$cfg_dbchar);
if($_POST){
	$url=$_POST['url'];
	if($_POST['uname']!='' && $_POST['pwd']!=''){
		$uname=$_POST['uname'];
		$pwd=$_POST['pwd'];
		$arr_user=select($link, 'user',"uname='$uname'");
		if($arr_user){
			if($pwd==$arr_user[0]['pwd']){
				$user=$arr_user[0]['tname'];
				$_SESSION['tname']=$arr_user[0]['tname'];
				$_SESSION['uname']=$arr_user[0]['uname'];
				echo "<script>";
				echo "alert('欢迎".$user."登陆！');";
				echo "window.location.href='".$url."';";
				echo "</script>";
			}else{
				echo "<script>";
				echo "alert('密码错误！');";
				echo "window.location.href='login.php?url=".$url."';";
				echo "</script>";
			}
		}else{
			echo "<script>";
			echo "alert('不存在的账号！');";
			echo "window.location.href='login.php?url=".$url."';";
			echo "</script>";
		}
	}else{
		echo "<script>";
		echo "alert('账号和密码不能为空！');";
		echo "window.location.href='login.php?url=".$url."';";
		echo "</script>";
	}
}
?>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
	<title>用户注册 -- <?php echo $cfg_indexname;?></title>
	<meta name="description" content="汪观富的个人网站"/>
	<meta name="keywords" content="汪观富的个人网站,汪观富网,汪观富网站用户登录"/>
	
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
<?php include "./public/include/head.php";?>
<div class="container min_hei">
	<ol class="breadcrumb bg_eee">
		<li><a href="/index.php">首页</a></li>
		<li class="active">用户登录</li>
	</ol>
	<div class="row">
		<h4 class="text-center bg-primary lhei">用户登陆</h4>
		<form action="login.php" method="post" class="form-horizontal form_pad">
			<input type="hidden" name="url" value="<?php echo $next_url;?>" />
		  	<div class="form-group">
			    <label for="input_2" class="col-sm-2 control-label font_s_reg">账号：</label>
			    <div class="col-sm-10">
			      	<input type="text" name="uname" class="form-control" id="input_2" placeholder="你的账号（如果是手机号那就很好记）">
			    </div>
		  	</div>
		  	<div class="form-group">
			    <label for="input_3" class="col-sm-2 control-label font_s_reg">密码：</label>
			    <div class="col-sm-10">
			      	<input type="text" name="pwd" class="form-control" id="input_3" placeholder="密码没忘记吧...">
			    </div>
		  	</div>
		  	<div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      	<button type="submit" class="btn btn-info">登陆</button>
			      	<a class="btn btn-default" href="reg.php?url=<?php echo $next_url;?>">没有账号，去注册</a>
			    </div>
		  	</div>
		</form>
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