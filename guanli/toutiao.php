<?php 
    /*连接数据库*/	
	header("content-type:application/json");
    include("conn1.php"); 
$json = '';
$data = array();
	/*用户id和用户名*/
 class Toutiao
{
public $id;
public $topic;
public $author;
} 

$sql = "SELECT * FROM toutiao";
$result = $mysqli->query($sql);
if($result){
      //echo "查询成功<br>";
 while ($row = mysqli_fetch_array($result,MYSQL_ASSOC))
{
$toutiao =new Toutiao(); 
$toutiao->id= $row["id"];
$toutiao->topic= $row["topic"];
$toutiao->author= $row["username"];
$data[]=$toutiao;
}
$json = json_encode($data);//把数据转换为JSON数据. */
   echo "{".'"toutiao"'.":".$json."}";  
}else{
echo "查询失败";
}
$mysqli->close();
?>
