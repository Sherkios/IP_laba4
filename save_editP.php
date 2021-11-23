<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Грищенко Игорь</title>
</head>
<body>
	<?php
	 mysqli_connect("localhost", "root", "", "proc") or die ("Невозможно
	подключиться к серверу"); // установление соединения с сервером
	 // подключение к базе данных:
	 $mysqli = mysqli_connect("localhost", "root", "", "proc") or die ("Невозможно
	подключиться к серверу");
	 $mysqli->query('SET NAMES UTF-8');
	 $zapros="UPDATE proces SET proc_name='".$_GET['name'].
	"', razryad='".$_GET['razryad']."', devolper='"
	.$_GET['devolper']."', user_count='".$_GET['user_count'].
	"', type='".$_GET['type']."' WHERE id_proc="
	.$_GET['id_proc'];
	 $mysqli->query($zapros);
	 if (mysqli_affected_rows($mysqli)>0) {
	 echo 'Все сохранено. <a href="Proc.php"> Вернуться к списку
	пользователей </a>'; }
	 else { echo 'Ошибка сохранения. <a href="Proc.php">
	Вернуться к списку пользователей</a> '; }
	?>

</body>
</html>