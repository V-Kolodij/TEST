<?php
header("Content-Type: text/html; charset=utf-8");
//$user=$_GET["user"];
if($_GET['user']=="admin"){
	header("Location: test22.php");
	exit;
}else{
	header("Location: 11.php");
}
?>