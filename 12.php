<?php
//print_r($_REQUEST);
header("Content-Type: text/html; charset=utf-8");
if (!empty($_REQUEST["user"])){
	setcookie('aiser', $_REQUEST["user"],time()+36000);
}

//echo $_COOKIE['user'];  
?>