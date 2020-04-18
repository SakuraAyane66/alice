<?php 
    /*连接数据库*/	
	//header("content-type:application/json");将头改为json数据
    //include("conn1.php");
    //include("check1.php");	
    session_start();
	//echo $_SESSION['user'];
    if(isset($_SESSION['user'])){
		//echo "session开启";
		header("location:Report.html");
	}else {
		//echo "session关闭";
		echo "<script>alert('请先进行登录');location='Homepage.html';</script>";
		   //header("location:Homepage.html");   
	}
	//unset($_SESSION['user']);
    //$mysqli->close();
?>
