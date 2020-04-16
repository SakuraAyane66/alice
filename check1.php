<?php
    /*判断密码是否正确*/
	include("conn1.php");
	//判断是否登录
	//$admin=false;
	$user = $_POST['user'];
	$pd =md5($_POST['password']);
	//echo $user;

	$res=$mysqli->query("select * from userinfo where username='{$user}'");	
	if($res->num_rows == 0){
		echo "<script>alert('用户不存在！请重试!');location='Homepage.html';</script> ";
	}else{
		$res->data_seek(0);
		$row=$res->fetch_assoc();
		if($pd == $row['password']){
			//创建一个新的session，来显示已经登录
			session_start();
			$_SESSION['user']=$user;
			//$_SESSION['admin']=true;
			setcookie("username",$user);	
            //setcookie("password",$pd,time()+3600);			
			echo "<script>alert('登录成功!');location='Homepage.html';</script> ";
		}else{
			echo "<script>alert('密码错误！请重试!');location='Homepage.html';</script> ";
		}
	}
	
	$mysqli->close();
?>