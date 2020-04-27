<?
   include("conn1.php");
   $select1 = $_POST['databaseid'];
   $id=$_POST['dataid'];
   echo "那么就是这里了？<br/>";
   echo $select1;
   echo "这儿都没有？<br/>";
   echo $id;
   echo "不是吧";
   if($select1==-1)
   {       
      $topic=$_POST['topic'];
      $content=$_POST['content'];
      /*echo "进来了<br/>";
       $mysqli->query("update userinfo set xingmin='$xingmin',age='$age',address='$address',school='$school',email='$email',qianming='$qianming' where username='$user'");
      echo $topic;
      echo $content;*/
	  $mysqli->query("update announcement set topic='$topic',content='$content' where id='$id'");     
	  echo "修改an成功！<a href ='guanliyuan.html'>这儿</a>";
   }else if($select1==-2){
    $topic=$_POST['topic'];
    $content=$_POST['content'];
    $mysqli->query("update goodthings set topic='$topic',content='$content' where id='$id'"); 	     
	  echo "修改goodthings成功！<a href ='guanliyuan.html'>这儿</a>";	   
   }else if($select1==-3){	 
    $topic=$_POST['topic'];
    $hylink=$_POST['hylink'];
    $mysqli->query("update publicconnect set topic='$topic',hyperlink='$hylink' where id='$id'"); 
	  echo "修改pubcc成功！<a href ='guanliyuan.html'>这儿</a>";	   
   }else if($select1==-4){
    $topic=$_POST['topic'];
    $content=$_POST['content'];   
    $mysqli->query("update publicvideo set topic='$topic',content='$content' where id='$id'");   
	  echo "修改pubvi成功！<a href ='guanliyuan.html'>这儿</a>"; 
   }else if($select1==-5){
    $topic=$_POST['topic'];
    $content=$_POST['content'];
    $mysqli->query("update toutiao set topic='$topic',content='$content' where id='$id' ");    
   echo "修改头条成功！<a href ='guanliyuan.html'>这儿</a>"; 
  }else if($select1==-6){
    $username=$_POST['username'];
    $password=md5($_POST['password']);
   $mysqli->query("update userinfo set username='$username',password='$password' where id='$id'");  
   echo "修改用户成功！<a href ='guanliyuan.html'>这儿</a>"; 
  }
   else{
	    echo "操作失败！<a href ='guanliyuan.html'>返回</a>"; 
   }

$mysqli->close(); 
?>