<?php
    include("conn1.php");
    header("address-type:application/json");
$data=array();  
$json='';

  class Userinfo{
public $xingmin;
public $age;
public $address;
public $school;
public $email;
public $qianming;
//public $test;	
}
session_start();	
$user=$_SESSION['user'];
if(isset($_SESSION['user'])){
  $result=$mysqli->query("select * from userinfo where username={$user}");
  if($result){
  while($row = mysqli_fetch_array($result,MYSQL_ASSOC))
   {
$userinfo =new  Userinfo(); 
$userinfo->xingmin= $row["xingmin"];
$userinfo->age= $row["age"];
$userinfo->address= $row["address"];
$userinfo->school= $row["school"];
$userinfo->email = $row["email"];
$userinfo->qianming = $row["qianming"];
//$userinfo->test=$row["password"];
$data[]=$userinfo;  
    }
	$json = json_encode($data);//把数据转换为JSON数据. */
    echo "{".'"userinfo"'.":".$json."}";   
  }
   
}
 else{
  echo "Error";
}
$mysqli->close();
?>