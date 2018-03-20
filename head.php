<?php
$user=$_GET["user"];
if($user="admin"){
	header("Location: test22.php");
}else{
	header("Location: 11.php");
}
?>