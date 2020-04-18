<?php 
    include("conn1.php");   	
	$select1 = $_POST['select1'];
	$url = $_POST['url'];
	$describe =$_POST['describe'];	
	$email = $_POST['email'];	
	session_start();	
	$values=$_SESSION['user'];
	//echo $_SESSION['user'];
	/*echo $values;
	echo "到4这里了<br>";
	echo "到这里了<br>";
    echo $_SESSION['user'];
	echo "<br>session启动成功";
	$type = gettype($values);
	echo $type;*/	
	$mysqli->query("insert into report(select1,url,describe1,email,user) values ('$select1','$url','$describe','$email','$values')");//插入	
    //echo "<script>alert('举报成功!');location='Homepage.html?uesr=yidenglu';</script>";
	echo "<script>alert('举报成功!');location='Homepage.html?user=yidenglu';</script> ";
$mysqli->close();
?>
