<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Грищенко Игорь</title>
</head>
<body>
	<H2>Регистрация на сайте:</H2>
	<form action="save_newKey.php" metod="get">
	 Дата приобретения: <input name="data_purchase" size="50" type="date">
	<br>Дата окончания: <input name="data_end" size="20" type="date">
	<br>ID OC: <input name="id_OC" size="20" type="text">
	<br>ID цифрового магазина: <input name="id_store" size="30" type="text">
	<br>цена: <input name="cost" rows="4" cols="40">
	<br>Ключ: <input name="kluch" rows="4" cols="40">
	<p><input name="add" type="submit" value="Добавить">
	<input name="b2" type="reset" value="Очистить"></p>
	</form>
	<p>
	<a href="Proc.php"> Вернуться к списку пользователей </a>
</body>
</html>