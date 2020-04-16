<?
/*由于checkbox属性，我们必须把checkbox复选择框的名字设置为一个如果checkbox[]，
这样php才能读取，以数据形式,否则不能正确的读取checkbox复选框的值哦。
*/
   include("conn1.php");
   $value = $_POST['checkbox'];    
   $num = count($value);//count()为数组统计函数 
   echo '你选择了:'.implode(',',$value); 
   //数组value从第二位开始才是id，第一位0为判断数据库
   if($value[0]==-1)
   {    
     for($i=1;$i<$num;$i++){
	  $mysqli->query("DELETE FROM announcement WHERE id={$value[$i]}");
      }
	  echo "删除an成功！<a href ='guanliyuan.html'>这儿</a>";
   }else if($value[0]==-2){	   
     for($i=1;$i<$num;$i++){
	  $mysqli->query("DELETE FROM goodthings WHERE id={$value[$i]}");
      }
	  echo "删除go成功！<a href ='guanliyuan.html'>这儿</a>";
	   
   }else if($value[0]==-3){	 
     for($i=1;$i<$num;$i++){
	  $mysqli->query("DELETE FROM publicconnect WHERE id={$value[$i]}");
      }
	  echo "删除pubcc成功！<a href ='guanliyuan.html'>这儿</a>";	   
   }else if($value[0]==-4){
	 
     for($i=1;$i<$num;$i++){
	  $mysqli->query("DELETE FROM publicvideo WHERE id={$value[$i]}");
      }
	  echo "删除pubvi成功！<a href ='guanliyuan.html'>这儿</a>"; 
   }
   else{
	    echo "操作失败！<a href ='guanliyuan.html'>返回</a>"; 
   }
$mysqli->close(); 
?>