<?
  header("content-type:application/json");
  include("conn1.php"); 
  $db=$_POST['db'];
  $getid=$_POST['id'];
  $json = '';
  $data = array();
  	/*搜索类*/
      class Xianshi
      {
         public $id;
         public $topic;
         public $content;
         public $author;
         public $hylink;
         public $password;
       }
  if($db==-1){
    $db="announcement";
    $sql = "SELECT * FROM {$db} WHERE id={$getid}";
    $result = $mysqli->query($sql);
    if($result){
        while ($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
      $xianshi =new  Xianshi(); 
      $xianshi->id= $row["id"];
      $xianshi->topic= $row["topic"];
      $xianshi->content= $row["content"];
      $xianshi->author = $row["author"];
      
      $data[]=$xianshi;
     }
      $json = json_encode($data);//把数据转换为JSON数据. */
      echo "{".'"xianshi"'.":".$json."}";  
    }else{
       echo "查询失败";
     }
  }else if($db==-2){
    $db="goodthings";
    $sql = "SELECT * FROM {$db} WHERE id={$getid}";
    $result = $mysqli->query($sql);
    if($result){
        while ($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
      $xianshi =new  Xianshi(); 
      $xianshi->id= $row["id"];
      $xianshi->topic= $row["topic"];
      $xianshi->content= $row["content"];
      $xianshi->author = $row["author"];
      $data[]=$xianshi;
     }
      $json = json_encode($data);//把数据转换为JSON数据. */
      echo "{".'"xianshi"'.":".$json."}";  
    }else{
       echo "查询失败";
     }
  }else if($db==-3){
    $db="publicconnect";
    $sql = "SELECT * FROM {$db} WHERE id={$getid}";
    $result = $mysqli->query($sql);
    if($result){
        while ($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
      $xianshi =new  Xianshi(); 
      $xianshi->id= $row["id"];
      $xianshi->topic= $row["topic"];
      $xianshi->author = $row["author"];
      $xianshi->hylink = $row["hyperlink"];
      $data[]=$xianshi;
     }
      $json = json_encode($data);//把数据转换为JSON数据. */
      echo "{".'"xianshi"'.":".$json."}";  
    }else{
       echo "查询失败";
     }
}else if($db==-4){
    $db="publicvideo";
    $sql = "SELECT * FROM {$db} WHERE id={$getid}";
    $result = $mysqli->query($sql);
    if($result){
        while ($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
      $xianshi =new  Xianshi(); 
      $xianshi->id= $row["id"];
      $xianshi->topic= $row["topic"];
      $xianshi->content= $row["content"];
      $xianshi->author = $row["author"];
      $data[]=$xianshi;
     }
      $json = json_encode($data);//把数据转换为JSON数据. */
      echo "{".'"xianshi"'.":".$json."}";  
    }else{
       echo "查询失败";
     }
}else if($db==-5){
    $db="toutiao";
    $sql = "SELECT * FROM {$db} WHERE id={$getid}";
    $result = $mysqli->query($sql);
    if($result){
        while ($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
      $xianshi =new  Xianshi(); 
      $xianshi->id= $row["id"];
      $xianshi->topic= $row["topic"];
      $xianshi->content= $row["content"];
      $data[]=$xianshi;
     }
      $json = json_encode($data);//把数据转换为JSON数据. */
      echo "{".'"xianshi"'.":".$json."}";  
    }else{
       echo "查询失败";
     }
}else if($db==-6){
    $db="userinfo";
    $sql = "SELECT * FROM {$db} WHERE id={$getid}";
    $result = $mysqli->query($sql);
    if($result){
        while ($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
      $xianshi =new  Xianshi(); 
      $xianshi->id= $row["id"];
      $xianshi->author = $row["username"];
      $xianshi->password = $row["password"];
      $data[]=$xianshi;
     }
      $json = json_encode($data);//把数据转换为JSON数据. */
      echo "{".'"xianshi"'.":".$json."}";  
    }else{
       echo "查询失败";
     }
}else { echo "数据库错误";}
$mysqli->close();	 
?>