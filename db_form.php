<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Базa даних</title>
</head>
<body>
	<form action="" method="get">
	<p><input type="submit" name="insert" value="Добавити працівника"></p>
	</form>
<?php 
if(isset($_GET['insert'])){	
echo "
	<form action='new_worker.php' method='get' target='_blank'>
	<p>Ім'я: <input type='text' name='name'>
	<p>Посада: <input type='text' name='position'>
	<p>Вік: <input type='text' name='age'>
	<p>Зарплата: <input type='text' name='zarplata'>
	<p><input type='submit' name='send' value='Відправити'></p>
	<p><input type='reset' name='reset' value='Очистити''></p>
	</form>";
}
?>
<form action="" method="get">
	<p><input type="submit" name="select" value="Вибрати працівника"></p>
	</form>
<?php 
if(isset($_GET['select'])){	
echo "Введіть будь-які дані:<br>
	<form action='' method='get'>
	<p>Ім'я: <input type='text' name='name'>
	<p>Посада: <input type='text' name='position'>
	<p>Вік: <input type='text' name='age'>
	<p>Зарплата: <input type='text' name='zarplata'>
	<p><input type='submit' name='send' value='Вибрати'></p>
	<p><input type='reset' name='reset' value='Очистити'></p>
	</form>";
}
?>
</body>
</html>