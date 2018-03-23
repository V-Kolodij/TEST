<?php 
include 'database_test.php'; //файл з коннектом до бази і перевірками вибору БД
echo "<hr>";
?>
<p>Піднімемо оклад на 10% всім у кого оклад > 400</p>
<?php 
$qw="SELECT NAME,ZARPLATA FROM worker where ZARPLATA>'400'"; //краще брати ще й по ІД бо воно унікальне
$upper=mysql_query($qw);
if (!$upper){
	echo "Select failed! ".mysql_error();
}
//print_r($upper);
// Апдейт зарплати:
while ($row=mysql_fetch_array($upper)){
	$zp=$row['ZARPLATA'];
	$new_zp=($row['ZARPLATA']+($row['ZARPLATA']*0.1)); // плюсуєм 10% до окладу
	$name=$row['NAME'];
	echo "Піднімемо оклад для $name з окладом $zp: <br>";
	//$new_zp="UPDATE worker SET ZARPLATA=$zp where NAME='$row['NAME']'"; так вимахувалося) присвоїв окремій змінній ім'я вище по коду
	$j=mysql_query("UPDATE worker SET ZARPLATA='$new_zp' where NAME='$name'");
	if(!$j){
		echo "Update failed! ".mysql_error();
	}
	$new_query = mysql_query("SELECT ZARPLATA FROM worker where NAME='$name'");
	$zp = mysql_fetch_row($new_query);
	echo "Оклад $name від тепер становить: ".$zp[0]."<br>";
}
echo "<hr>";
echo "Оклад збільшено успішно!";
echo "<hr>";
?>

