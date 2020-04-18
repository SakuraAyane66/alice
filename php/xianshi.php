<?
  header("content-type:application/json");
  include("conn1.php"); 
  $db=$_POST['db'];
  $getid=$_POST['id'];
  $json = '';
  $data = array();
  /*$db1="announcement";
  $db2="goodthings";
  $db3="publicconnect";
  $db4="publicvideo";
  */
	/*搜索类*/
  class Xianshi
    {
       public $id;
       public $topic;
       public $content;
       public $author;
       public $time1; /*避免之后的关键词time，用来time1*/
     } 
	 $sql = "SELECT * FROM {$db} WHERE id={$getid}";
	 $result = $mysqli->query($sql);
	 
	 if($result){
	     while ($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
       $xianshi =new  Xianshi(); 
       $xianshi->id= $row["id"];
       $xianshi->topic= $row["topic"];
       $xianshi->content= $row["content"];
       $xianshi->time1= $row["time"];
       $xianshi->author = $row["author"];
       $data[]=$xianshi;
	  }
	   $json = json_encode($data);//把数据转换为JSON数据. */
       echo "{".'"xianshi"'.":".$json."}";  
	 }else{
		echo "查询失败";
 	 }

$mysqli->close();	 
?>