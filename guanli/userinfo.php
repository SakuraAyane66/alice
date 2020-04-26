<?php 
    /*连接数据库*/	
	header("content-type:application/json");
    include("conn1.php"); 
$json = '';
$data = array();
	/*用户id和用户名*/
 class Userinfo
{
public $id;
public $username;
} 

$sql = "SELECT * FROM userinfo";
$result = $mysqli->query($sql);
if($result){
      //echo "查询成功<br>";
 while ($row = mysqli_fetch_array($result,MYSQL_ASSOC))
{
$userinfo =new Userinfo(); 
$userinfo->id= $row["id"];
$userinfo->username= $row["username"];
$data[]=$userinfo;
}
$json = json_encode($data);//把数据转换为JSON数据. */
   echo "{".'"userinfo"'.":".$json."}";  
}else{
echo "查询失败";
}
$mysqli->close();
?>
