<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8" />
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Анонимные функции с использованием `use`</h2>
	<hr>
	<h2>Список преподавателей</h2>

	<?php
	require "personnel.php";

	// замыкание, наследующее массив $personnel
	$outPersonnel = function() use ($personnel) {
		$tr = "";
		foreach ($personnel as $person) {
			$tr .= "
				<tr>
					<td>{$person['id_personnel']}</td>
					<td>{$person['surname']} {$person['name']} {$person['patronymic']}</td>
					<td>{$person['post']}</td>
					<td>{$person['category']}</td>
				</tr>
			";
		}
		return "
			<table border=1 cellpadding=5>
			<tr>
				<th>№</th>
				<th>Фамилия Имя Отчество</th>
				<th>Должность</th>
				<th>Категория</th>
			</tr>
			{$tr}
			</table>
		";
	};

	// вызов замыкания без аргументов
	echo $outPersonnel();
	?>
</body>
</html>