<p>Збільшимо Василю шоферу зарплату до 390грн:</p>
<?php 
include 'database_test.php';
$up="UPDATE worker SET ZARPLATA='390' where NAME='Василь'";
$vas=mysql_query($up);
if (!$vas){
	echo "Update faild! ".mysql_error();
}else{
	echo "Зарплату збільшено до 390";
}

?>

