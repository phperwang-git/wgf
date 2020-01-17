<?php
header("content-type:text/html;charset=utf-8");
session_start();
include "./public/config/config.php";
include "./public/include/funcs.php";
$prev_url=$_REQUEST['url'];
$next_url=$prev_url ? $prev_url : "/";
$link=conn($cfg_dbhost,$cfg_dbuser,$cfg_dbpwd,$cfg_dbname,$cfg_dbchar);
if($_POST['uname']){
	$url=$_POST['url'];
	$uname=$_POST['uname'];
	if($_POST['pwd']==$_POST['pwd_2'] && $_POST['pwd']!=''){
		$arr_user=select($link, 'user',"uname='$uname'");
		//var_dump($arr_user);
		if(!$arr_user){
			$arr['tname']=$_POST['tname'];
			$arr['uname']=$_POST['uname'];
			$arr['pwd']=$_POST['pwd'];
			$re=add($link, 'user', $arr);
			if($re){
				$user=$_POST['tname'];
				$_SESSION['tname']=$_POST['tname'];
				$_SESSION['uname']=$_POST['uname'];
				echo "<script>";
				echo "alert('账号注册成功！欢迎新会员".$user."');";
				echo "window.location.href='".$url."';";
				echo "</script>";
			}
		}else{
			echo "<script>";
			echo "alert('该账号已经被注册！');";
			echo "window.location.href='reg.php?url=".$url."';";
			echo "</script>";
		}
	}else{
		echo "<script>";
		echo "alert('密码必须填，并且两次输入一样的！');";
		echo "window.location.href='reg.php?url=".$url."';";
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
	<meta name="keywords" content="汪观富的个人网站,汪观富网,汪观富用户注册"/>
	
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
		<li class="active">用户注册</li>
	</ol>
	<div class="row">
		<h4 class="text-center bg-primary lhei">用户注册</h4>
		<form action="reg.php" method="post" class="form-horizontal form_pad">
			<input type="hidden" name="url" value="<?php echo $next_url;?>" />
		  	<div class="form-group">
			    <label for="input_1" class="col-sm-2 control-label font_s_reg">真实姓名：</label>
			    <div class="col-sm-10">
			      	<input type="text" name="tname" class="form-control" id="input_1" placeholder="你的姓名...">
			    </div>
		  	</div>
		  	<div class="form-group">
			    <label for="input_2" class="col-sm-2 control-label font_s_reg">注册账号：</label>
			    <div class="col-sm-10">
			      	<input type="text" name="uname" class="form-control" id="input_2" placeholder="建议用手机号...">
			    </div>
		  	</div>
		  	<div class="form-group">
			    <label for="input_3" class="col-sm-2 control-label font_s_reg">设置密码：</label>
			    <div class="col-sm-10">
			      	<input type="password" name="pwd" class="form-control" id="input_3" placeholder="设置一个简单好记的密码...">
			    </div>
		  	</div>
		  	<div class="form-group">
			    <label for="input_4" class="col-sm-2 control-label font_s_reg">重复密码：</label>
			    <div class="col-sm-10">
			      	<input type="password" name="pwd_2" class="form-control" id="input_4" placeholder="重复上面的密码...">
			    </div>
		  	</div>
		  	<div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      	<button type="submit" class="btn btn-info">注册</button>
			      	<a class="btn btn-default" href="login.php?url=<?php echo $next_url;?>">已有账号，直接登陆</a>
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