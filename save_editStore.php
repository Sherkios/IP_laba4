<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Грищенко Игорь</title>
</head>
<body>
	<?php
	 define ("HOST", "localhost");
	define ("USER", "f0592623_proc");
	define ("PASS", "admin");
	define ("DB", "f0592623_proc"); // установление соединения с сервером
	 // подключение к базе данных:
	 $mysqli = mysqli_connect(HOST, USER, PASS, DB) or die ("Невозможно
	подключиться к серверу");
	 $mysqli->query('SET NAMES UTF-8');
	 $zapros="UPDATE digital_stores SET name='".$_GET['name'].
	"', url='".$_GET['url']."' WHERE id_store="
	.$_GET['id_store'];
	 $mysqli->query($zapros);
	 if (mysqli_affected_rows($mysqli)>0) {
	 echo 'Все сохранено. <a href="Proc.php"> Вернуться к списку
	магазинов </a>'; }
	 else { echo 'Ошибка сохранения. <a href="Proc.php">
	Вернуться к списку пользователей</a> '; }
	?>

</body>
</html>