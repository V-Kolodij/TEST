<?php
$name=$_GET['name'];
$position=$_GET['position'];
$age=$_GET['age'];
$zarplata=$_GET['zarplata'];
//Добавлення нового працівника: 
include 'database_test.php';
$insert = ("INSERT INTO worker VALUES (NULL, '$name','$position','$age','$zarplata')");
$ins = mysql_query($insert);
if (!$ins){
	echo "Insert Failed !".mysql_error();
}else{
	echo "Працівника добавлено!";
}
mysql_close($link);
?>