<?php 
    /*连接数据库*/	
	header("content-type:application/json");
    include("conn1.php"); 
//$keywords = '%'.$_GET['k'].'%';  //获取搜索关键字 
//$keywords="日本";
$keywords=$_POST['keywords'];
$json = '';
$data = array();	
	/*搜索类*/
 class Allcontents
{
public $id;
public $topic;
public $content;
public $author;
public $time1; /*避免之后的关键词time，用来time1*/
public $hyperlink;
public $db;
} 
//$sql = "SELECT * FROM announcement WHERE author is null "; 数据库中为null的用 is null 查询。
$sql = "SELECT * FROM publicconnect WHERE (topic like '%{$keywords}%')";//一张表
$sql1 = "SELECT * FROM publicvideo WHERE ((topic like '%{$keywords}%') OR (content like '%{$keywords}%'))";
$sql2 = "SELECT * FROM announcement WHERE ((topic like '%{$keywords}%') OR (content like '%{$keywords}%'))";
$sql3 = "SELECT * FROM goodthings WHERE ((topic like '%{$keywords}%') OR (content like '%{$keywords}%'))";
$result = $mysqli->query($sql);
$result1 = $mysqli->query($sql1);
$result2 = $mysqli->query($sql2);
$result3 = $mysqli->query($sql3);
if($result||$result1||$result2||$result3){
//表1
 while ($row = mysqli_fetch_array($result,MYSQL_ASSOC))
{
$allcontents =new  Allcontents(); 
$allcontents->id= $row["id"];
$allcontents->topic= $row["topic"];
$allcontents->hyperlink = $row["hyperlink"];
$allcontents->db="publicconnect";
$data[]=$allcontents;
}
//表2
 while ($row = mysqli_fetch_array($result1,MYSQL_ASSOC))
{
$allcontents =new  Allcontents(); 
$allcontents->id= $row["id"];
$allcontents->topic= $row["topic"];
$allcontents->db="publicvideo";
$data[]=$allcontents;
}
//表3
 while ($row = mysqli_fetch_array($result2,MYSQL_ASSOC))
{
$allcontents =new  Allcontents(); 
$allcontents->id= $row["id"];
$allcontents->topic= $row["topic"];
$allcontents->db="announcement";
$data[]=$allcontents;
}
//表4
 while ($row = mysqli_fetch_array($result3,MYSQL_ASSOC))
{
$allcontents =new  Allcontents(); 
$allcontents->id= $row["id"];
$allcontents->topic= $row["topic"];
$allcontents->db="goodthings";
$data[]=$allcontents;
}
   $json = json_encode($data);//把数据转换为JSON数据. 
   echo "{".'"allcontents"'.":".$json."}";  	
}else {
   //查询失败
 echo "查询失败";
}
$mysqli->close();
?>
