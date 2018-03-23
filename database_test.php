<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB','main');
$link = mysql_connect(HOST,USER,PASS,DB);
if (!$link){
	exit("Not connect!");
}else{
	echo "Connect is true!";
}

$select = mysql_select_db(DB);
if (!$select){
	echo "<br>";
	 exit("Select DB is Faild!");
}else{
	echo "<br>";
	echo "Database ". DB."  is select!";
	echo "<br>";
	echo "<hr>";
}
mysql_query("SET NAMES UTF8");
?>