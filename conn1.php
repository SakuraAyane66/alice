
<?php
	/*$mysqli = new mysqli("localhost","root","2008200751","dragon",3306);
	if($mysqli->connect_errno){
		echo $mysqli->connect_error;
	}*/
	$mysqli = new mysqli("127.0.0.1","root","E742fd52402a","alice",3306);
	//echo "link start!";
	if($mysqli->connect_errno){
		echo $mysqli->connect_error;
	}
	//echo "连接成功!<br>";
?>