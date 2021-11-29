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
	 $zapros="DELETE FROM digital_stores WHERE id_store=" . $_GET['id_store'];
	 $mysqli->query($zapros);
	 header("Location: Proc.php");
	 exit;
	?>

</body>
</html>