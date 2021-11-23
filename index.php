<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<title>Грищенко Игорь</title>
</head>
<body>
	<?php
	 mysqli_connect("localhost", "root", "", "users") or die ("Невозможно
	подключиться к серверу"); // установление соединения с сервером
	 // подключение к базе данных:
	 $mysqli = mysqli_connect("localhost", "root", "", "users") or die ("Невозможно
	подключиться к серверу");
	?>
	<h2>Зарегистрированные пользователи:</h2>
	<table border="1">
	<tr> // вывод «шапки» таблицы
	 <th> Имя </th> <th> E-mail </th>
	 <th> Редактировать </th> <th> Уничтожить </th> </tr>
	<?php
	$result=$mysqli->query("SELECT id_user, user_name, user_e_mail
	FROM user"); // запрос на выборку сведений о пользователях
	while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
	 echo "<tr>";
	 echo "<td >" . $row['user_name'] . "</td>";
	 echo "<td>" . $row['user_e_mail'] . "</td>";
	 echo "<td><a href='edit.php?id_user=" . $row['id_user']
	. "' name='id_user' value='".$row['id_user']."'>Редактировать</a></td>"; // запуск скрипта для редактирования
	 echo "<td><a href='delete.php?id_user=" . $row['id_user']
	. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
	 echo "</tr>";
	}
	print "</table>";
	$num_rows = mysqli_num_rows($result); // число записей в таблице БД
	print("<P>Всего пользователей: $num_rows </p>");
	?>
	<p> <a href="new.php"> Добавить пользователя </a>
		<br>
	<a href="Proc.php">Страница для базы данных Процессоров</a>
	<a href="">Страница для базы данных Студентов</a>
</body>
</html>