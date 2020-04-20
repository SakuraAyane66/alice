<?php
include("conn1.php");
$topic=strim($_POST['topic']);
$content=strim($_POST['content']);
/*$topic=$_POST['topic'];
$content=$_POST['content'];*/
echo "这儿呢？";
echo $topic;
echo $content;

session_start();
$user=$_SESSION['user'];
echo "user";
echo $user;
if(isset($_SESSION['user'])){
 //插入数据库
 echo "进来了把？<br>";
 $mysqli->query("insert into publicvideo(topic,content,author,time) values ('$topic','$content','$user',now())");
 echo "<script>alert('发布成功!');location='Person.html';</script>";
}else{
   echo "修改失败";
}
function strim($str)
{
 //trim() 函数移除字符串两侧的空白字符或其他预定义字符。
 //htmlspecialchars() 函数把预定义的字符转换为 HTML 实体(防xss攻击)。
 //预定义的字符是：
 //& （和号）成为 &
 //" （双引号）成为 "
 //' （单引号）成为 '
 //< （小于）成为 <
 //> （大于）成为 >
 return quotes(htmlspecialchars(trim($str)));
}
//防sql注入
function quotes($content)
{
 //if $content is an array
 if (is_array($content))
 {
  foreach ($content as $key=>$value)
  {
   //$content[$key] = mysql_real_escape_string($value);
   /*addslashes() 函数返回在预定义字符之前添加反斜杠的字符串。
   预定义字符是：
   单引号（'）
   双引号（"）
   反斜杠（\）
   NULL */
   $content[$key] = addslashes($value);
  }
 } else
 {
  //if $content is not an array
  //$content=mysql_real_escape_string($content);
  $content=addslashes($content);
 }
 return $content;
}

$mysqli->close();
?>