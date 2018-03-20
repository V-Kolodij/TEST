<?php
session_start();
session_name("YohOO");


$_SESSION['user']="admin";

echo"<pre>";
print_r($_SESSION);
echo"</pre>";
echo $_COOKIE["YohOO"];
echo session_save_path()."<br>";
echo sys_get_temp_dir()."<br>";
echo"<pre>";
print_r($_SERVER);
echo"</pre>";
?>