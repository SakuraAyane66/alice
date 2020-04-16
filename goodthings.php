<?php 
    /*连接数据库*/	
	header("content-type:application/json");
    include("conn1.php"); 
$json = '';
$data = array();
	
	/*公告类*/
 class Goodthings
{
public $id;
public $topic;
public $content;
public $author;
public $time1; /*避免之后的关键词time，用来time1*/
public $hyperlink;
} 

$sql = "SELECT * FROM goodthings";
$result = $mysqli->query($sql);
if($result){
      //echo "查询成功<br>";
 while ($row = mysqli_fetch_array($result,MYSQL_ASSOC))
{
$goodthings =new  Goodthings(); 
$goodthings->id= $row["id"];
$goodthings->topic= $row["topic"];
$goodthings->content= $row["content"];
$goodthings->time1= $row["time"];
$goodthings->author = $row["author"];
$goodthings->hyperlink = $row["hyperlink"];
$data[]=$goodthings;
}
$json = json_encode($data);//把数据转换为JSON数据. */
   echo "{".'"goodthings"'.":".$json."}";  
}else{
echo "查询失败";
}
$mysqli->close();
?>
