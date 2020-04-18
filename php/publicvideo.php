<?php 
    /*连接数据库*/	
	header("content-type:application/json");
    include("conn1.php"); 
$json = '';
$data = array();
	
	/*公告类*/
 class Publicvideo
{
public $id;
public $topic;
public $content;
public $author;
public $time1; /*避免之后的关键词time，用来time1*/
public $hyperlink;
} 
$sql = "SELECT * FROM publicvideo";
$result = $mysqli->query($sql);
if($result){
      //echo "查询成功<br>";
 while ($row = mysqli_fetch_array($result,MYSQL_ASSOC))
{
$publicvideo =new Publicvideo(); 
$publicvideo->id= $row["id"];
$publicvideo->topic= $row["topic"];
$publicvideo->content= $row["content"];
$publicvideo->time1= $row["time"];
$publicvideo->author = $row["author"];
$publicvideo->hyperlink = $row["hyperlink"];
$data[]=$publicvideo;
}
   $json = json_encode($data);//把数据转换为JSON数据. */
   echo "{".'"publicvideo"'.":".$json."}";  
}else{
echo "查询失败";
}
$mysqli->close();
?>
