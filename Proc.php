<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<title>Грищенко Игорь</title>
</head>
<body>
	<?php
	 mysqli_connect("localhost", "root", "", "proc") or die ("Невозможно
	подключиться к серверу"); // установление соединения с сервером
	 // подключение к базе данных:
	 $mysqli = mysqli_connect("localhost", "root", "", "proc") or die ("Невозможно
	подключиться к серверу");
	?>
	<h2>Зарегистрированные пользователи:</h2>
	<table border="1">
	<tr> // вывод «шапки» таблицы
	 <th> Название </th> <th> тип </th><th> разрядность </th><th> разработчик </th>
	 <th> Редактировать </th> <th> Уничтожить </th> </tr>
	<?php
	$result=$mysqli->query("SELECT id_proc, proc_name, type, razryad, devolper
	FROM proces"); // запрос на выборку сведений о пользователях
	while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
	 echo "<tr>";
	 echo "<td >" . $row['proc_name'] . "</td>";
	 echo "<td >" . $row['type'] . "</td>";
	 echo "<td>" . $row['razryad'] . "</td>";
	 echo "<td>" . $row['devolper'] . "</td>";
	 echo "<td><a href='editP.php?id_proc=" . $row['id_proc']
	. "' '>Редактировать</a></td>"; // запуск скрипта для редактирования
	 echo "<td><a href='deleteP.php?id_proc=" . $row['id_proc']
	. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
	 echo "</tr>";
	}
	print "</table>";
	$num_rows = mysqli_num_rows($result); // число записей в таблице БД
	print("<P>Всего пользователей: $num_rows </p>");
	?>
	<p> <a href="newP.php"> Добавить пользователя </a>
		<br>
</body>
</html>