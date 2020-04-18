<?php
  include("conn1.php"); 
  $xingmin=$_POST['xingmin'];
  $age=$_POST['age'];
  $address=$_POST['address'];
  $school=$_POST['school'];
  $email=$_POST['email'];
  $qianming=$_POST['qianming'];
  session_start();
  $user=$_SESSION['user'];
  //echo $user; 
  
  if(isset($_SESSION['user'])){
	 //echo "进来了把？<br>";
	 try{		 
	 $mysqli->query("update userinfo set xingmin='$xingmin',age='$age',address='$address',school='$school',email='$email',qianming='$qianming' where username='$user'");
     //$mysqli->query("update userinfo set age='$age' where username={$user}");	   
	 //echo $user;
	// echo "没到这儿";
	 //$mysqli->query("insert into userinfo(username,age) values('skydragon','21')");
	 //echo "jiayou";	 
	 //echo "test";
     // $mysqli->query("update userinfo set xingmin='$xingmin',age='$age',address='$address',school='$school',email='$email',qianming='$qianming' where username={$user}");
     //echo "<script>alert('修改成功!');window.location.reload();</script>"; 
    }catch(Exception $e){
		echo $e->getMessage();
	}
  }
  else {
	 //echo "<script>alert('修改失败!');window.location.reload();</script>";  
	 echo "修改失败";
  } 
$mysqli->close();
?>