<?
   include("conn1.php");
   $select1 = $_POST['select1'];
   echo $select1;
   //数组value从第二位开始才是id，第一位0为判断数据库
   if($select1==-1)
   {       
      $topic=$_POST['topic'];
      $content=$_POST['content'];
      echo "进来了<br/>";
      echo $topic;
      echo $content;
	  $mysqli->query("insert into announcement(topic,content,author,time) values ('$topic','$content','管理员',now())");     
	  echo "增加an成功！<a href ='guanliyuan.html'>这儿</a>";
   }else if($select1==-2){
    $topic=$_POST['topic'];
    $content=$_POST['content'];
    $mysqli->query("insert into goodthings(topic,content,author,time) values ('$topic','$content','管理员',now())"); 	     
	  echo "增加goodthings成功！<a href ='guanliyuan.html'>这儿</a>";
	   
   }else if($select1==-3){	 
    $topic=$_POST['topic'];
    $hylink=$_POST['hylink'];
    $mysqli->query("insert into publicconnect(topic,hyperlink,author,time) values ('$topic','$hylink','管理员',now())"); 
	  echo "增加pubcc成功！<a href ='guanliyuan.html'>这儿</a>";	   
   }else if($select1==-4){
    $topic=$_POST['topic'];
    $content=$_POST['content'];   
    $mysqli->query("insert into publicvideo(topic,content,author,time) values ('$topic','$content','管理员',now())");   
	  echo "增加pubvi成功！<a href ='guanliyuan.html'>这儿</a>"; 
   }else if($select1==-5){
    $topic=$_POST['topic'];
    $content=$_POST['content'];
    $mysqli->query("insert into toutiao(topic,content,username,time) values ('$topic','$content','管理员',now())");    
   echo "增加头条成功！<a href ='guanliyuan.html'>这儿</a>"; 
  }else if($select1==-6){
    $username=$_POST['username'];
    $password=md5($_POST['password']);
   $mysqli->query("insert into userinfo(username,password) values ('$username','$password')");  
   echo "增加用户成功！<a href ='guanliyuan.html'>这儿</a>"; 
  }
   else{
	    echo "操作失败！<a href ='guanliyuan.html'>返回</a>"; 
   }
$mysqli->close(); 
?>