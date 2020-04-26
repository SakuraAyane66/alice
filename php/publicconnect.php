<?php 
    /*连接数据库*/	
	header("content-type:application/json");
    include("conn1.php"); 
$json = '';
$data = array();
	
	/*公告类*/
 class Publicconnect
{
public $id;
public $topic;
//public $content;
public $author;
public $time1; /*避免之后的关键词time，用来time1*/
public $hyperlink;
} 

$sql = "SELECT * FROM publicconnect";
$result = $mysqli->query($sql);
if($result){
      //echo "查询成功<br>";
 while ($row = mysqli_fetch_array($result,MYSQL_ASSOC))
{
$publicconnect =new  Publicconnect(); 
$publicconnect->id= $row["id"];
$publicconnect->topic= $row["topic"];
//$publicconnect->content= $row["content"];
$publicconnect->time1= $row["time"];
$publicconnect->author = $row["author"];
$publicconnect->hyperlink = $row["hyperlink"];
$data[]=$publicconnect;
}
$json = json_encode($data);//把数据转换为JSON数据. */
   echo "{".'"publicconnect"'.":".$json."}";  
}else{
echo "查询失败";
}
$mysqli->close();
?>
