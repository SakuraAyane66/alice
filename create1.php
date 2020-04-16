<?php
	include("conn1.php");
	$user = $_POST['user'];
	$password =md5($_POST['password']);
	$res = $mysqli->query("select * from userinfo where username = '{$user}'");	
	if($res->num_rows !=0){
		echo "用户名已存在!<a href ='Homepage.html'>点击返回首页!</a>";
	}else{
		$mysqli->query("insert into userinfo(username,password) values ('$user','$password')");//插入		
		//之后要改为直接切回首页
		//header("Location: Homepage.html");
		echo "创建成功！<a href ='Homepage.html'>赶快登录吧!</a>";
	}
	$mysqli->close();
?>