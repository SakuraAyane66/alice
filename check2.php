<?php 
    /*连接数据库*/	
	//header("content-type:application/json");将头改为json数据
    //include("conn1.php");
    //include("check1.php");	
    session_start();
	$user=$_SESSION['user'];
	//echo $user;
    if(isset($_SESSION['user'])){
		//关闭	
	    //echo "进来了，有session";
		setcookie("username","",time()-3600);
		session_unset();
		//session_destroy();		
		echo "<script>alert('退出成功！');location='Homepage.html';</script>";
		//header("location:Homepage.html");
	}else {
		//echo "请先登录";
	    setcookie("username","",time()-3600);
		echo "<script>alert('请先进行登录');location='Homepage.html';</script>";
	}
       //$mysqli->close();
?>
