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
	 $rows=$mysqli->query("SELECT data_purchase, data_end,
	id_OC, id_store, cost, kluch FROM digital_keys WHERE
	id_key=".$_GET['id_key']);
	 while ($st = mysqli_fetch_array($rows)) {
	 $id=$_GET['id_key'];
	 $data_purchase = $st['data_purchase'];
	 $data_end = $st['data_end'];
	 $id_OC = $st['id_OC'];
	 $id_store = $st['id_store'];
	 $cost = $st['cost'];
	 $kluch = $st['kluch'];
	 }
	print "<form action='save_editKey.php' metod='get'>";
	print "Дата покупки: <input name='data_purchase' size='50' type='text'
	value='".$data_purchase."'>";
	print "<br>Дата окончания: <input name='data_end' size='20' type='text'
	value='".$data_end."'>";
	print "<br>ID OC: <input name='id_OC' size='20' type='text'
	value='".$id_OC."'>";
	print "<br>ID цифрового магазина: <input name='id_store' size='30' type='text'
	value='".$id_store."'>";
	print "<br>Цена: <input name='cost' rows='4'
	cols='40' value='".$cost."'>";
	print "<br>ключ: <input name='kluch' rows='4'
	cols='40' value='".$kluch."'>";
	print "<input type='hidden' name='id_key' value='".$id."'> <br>";
	print "<input type='submit' name='' value='Сохранить'>";
	print "</form>";
	print "<p><a href=\"Proc.php\"> Вернуться к списку
	пользователей </a>";
	?>
</body>
</html>