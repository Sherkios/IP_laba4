<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Грищенко Игорь</title>
</head>
<body>
	<?php
	 // Подключение к базе данных:
	mysqli_connect("localhost", "root", "", "proc") or die ("Невозможно
	подключиться к серверу"); // установление соединения с сервером
	 // подключение к базе данных:
	 $mysqli = mysqli_connect("localhost", "root", "", "proc") or die ("Невозможно
	подключиться к серверу");
	 $mysqli->query('SET NAMES UTF-8'); // Тип кодировки
	 // Строка запроса на добавление записи в таблицу:
	 $sql_add = "INSERT INTO digital_keys SET data_purchase='" . $_GET['data_purchase']
	."', data_end='".$_GET['data_end']."', id_OC='"
	.$_GET['id_OC']."', id_store='".$_GET['id_store'].
	"', cost='".$_GET['cost']. "', kluch='".$_GET['kluch']. "'";
	 $mysqli->query($sql_add); // Выполнение запроса
	 if (mysqli_affected_rows($mysqli)>0) // если нет ошибок при выполнении запроса
	 { print "<p>Спасибо, вы зарегистрировали ключ в базе данных.";
	 print "<p><a href=\"Proc.php\"> Вернуться к списку
	ключей </a>"; }
	 else { print "Ошибка сохранения. <a href=\"Proc.php\">
	Вернуться к списку ключей </a>"; }
	?>
</body>
</html>