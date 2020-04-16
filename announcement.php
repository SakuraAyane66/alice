<?php 
    /*连接数据库*/	
	header("content-type:application/json");
    include("conn1.php"); 
$json = '';
$data = array();
	
	/*公告类*/
 class Announcement
{
public $id;
public $topic;
public $content;
public $time1; /*避免之后的关键词time，用来time1*/
public $author;
public $hyperlink;
} 

$sql = "SELECT * FROM announcement";
$result = $mysqli->query($sql);
if($result){
      //echo "查询成功<br>";
 while ($row = mysqli_fetch_array($result,MYSQL_ASSOC))
{
$announcement =new  Announcement(); 
$announcement->id= $row["id"];
$announcement->topic= $row["topic"];
$announcement->content= $row["content"];
$announcement->time1= $row["time"];
$announcement->author = $row["author"];
$announcement->hyperlink = $row["hyperlink"];
$data[]=$announcement;
}
$json = json_encode($data);//把数据转换为JSON数据. */
   echo "{".'"announcement"'.":".$json."}";  
}else{
echo "查询失败";
}
$mysqli->close();
?>