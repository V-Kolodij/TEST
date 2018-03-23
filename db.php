<?php
include 'database_test.php';
$query="SELECT * FROM  `worker` LIMIT 0 , 30";
$result= mysql_query($query);
//$row=mysql_fetch_array($result);
?>
<table border="1px" cellspacing="2" cellpadding="5">
	<tr>
		<th>Ім'я</th>
		<th>Посада</th>
		<th>Вік</th>
		<th>Оклад</th>
	</tr>
<?php	
while ($row=mysql_fetch_array($result)){
?>
	<tr>
		<td><?php echo $row['NAME'];?></td>
		<td><?php echo $row['POSITION'];?></td>
		<td><?php echo $row['AGE'];?></td>
		<td><?php echo $row['ZARPLATA'];?></td>
	</tr>

<?php } ?>
</table>
<p>Виберем працівника з іd = 3 :</p>
<?php 
echo "<hr>";
$res=mysql_query("SELECT * FROM  `worker` WHERE ID=3"  );
$id = mysql_fetch_array($res);

echo "Ім'я: ".$id['NAME'];echo "<br>";
echo "Посада: ".$id['POSITION'];echo "<br>";
echo "Вік: ".$id['AGE'];echo "<br>";
echo "Оклад: ".$id['ZARPLATA'];echo "<br>";
echo "<hr>";
echo "<p>Виберем працівника у якого оклад 440:</p>";
$rest=mysql_query("SELECT * FROM  `worker` WHERE ZARPLATA = 440"  );
$idbn = mysql_fetch_array($rest);

echo "Ім'я: ".$idbn['NAME'];
echo "<br>";
echo "Посада: ".$idbn['POSITION'];
echo "<br>";
echo "Вік: ".$idbn['AGE'];
echo "<br>";
echo "Оклад: ".$idbn['ZARPLATA'];
echo "<br>";
echo "<hr>";
echo "<p>Виберем працівника у якого оклад > 300 і вік меньше 40:</p>";
$qwert=mysql_query("SELECT * FROM  `worker` WHERE ZARPLATA > 300 and AGE < 40"  );
//$i = mysql_fetch_array($qwert);

while ($i = mysql_fetch_array($qwert)){
?>
<table border="1px" cellspacing="2" cellpadding="5">
	<tr>
	<td><?php echo $i['NAME'];?></td>
	<td><?php echo $i['POSITION'];?></td>
	<td><?php echo $i['AGE'];?></td>
	<td><?php echo $i['ZARPLATA'];?></td>
	</tr>

<?php } ?>
</table>

<?php
echo "<hr>";
echo "<p>Виберем працівника у якого вік > 31 і  меньше 45:</p>";
$q=mysql_query("SELECT * FROM  `worker` WHERE AGE > 31 and AGE < 45");
while ($k = mysql_fetch_array($q)){
?>
<table>
	<tr>
	<td><?php echo $k['NAME'];?></td>
	<td><?php echo $k['POSITION'];?></td>
	<td><?php echo $k['AGE'];?></td>
	<td><?php echo $k['ZARPLATA'];?></td>
	</tr>

<?php } ?>
</table>

<?php
echo "<hr>";
//Добавлення нового працівника: 

/*$insert = ("INSERT INTO worker VALUES ('', 'Дмитро','кодер','25','530')");
$ins = mysql_query($insert);
if (!$ins){
	echo "FAILD INSERT!".mysql_error();
}*/
$query="SELECT * FROM  `worker` LIMIT 0 , 30";
$result= mysql_query($query);
//$row=mysql_fetch_array($result);
?>
<table border="1px" cellspacing="2" cellpadding="5">
	<tr>
		<th>Ім'я</th>
		<th>Посада</th>
		<th>Вік</th>
		<th>Оклад</th></tr>
	<tr>
<?php
while ($row=mysql_fetch_array($result)){
?>
	<tr>
		<td><?php echo $row['NAME'];?></td>
		<td><?php echo $row['POSITION'];?></td>
		<td><?php echo $row['AGE'];?></td>
		<td><?php echo $row['ZARPLATA'];?></td>
	</tr>

<?php } ?>
</table>
<?php 
//видалення працівника по ID:
/*$q=mysql_query("DELETE FROM worker where id='8'");
if (!$q){
	echo "FAILD DELETING!".mysql_error();
}*/
?>


