<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Функции</h1>
	<h2>Область видимости переменных</h2>
	<hr>
	<h2>Список преподавателей</h2>
	
	<?php

	require "personnel.php";


	$statistic = array();

	function fnСollectingStatistic($array){
		global $statistic;
		static $i = 0; 
		
		$statistic[$i]["user"] = $array["surname"] . " " . $array["name"] . " " . $array["patronymic"];
		$statistic[$i]["site"] = $array["site"];
		$statistic[$i]["email"] = $array["email"];

		$i++; 
	}
	

	function fnOutPersonnel($personnel) {
		$tr = "";
		foreach ($personnel as $person) {

	
			if ($person["site"] == "" || $person["email"] == "") {
				fnСollectingStatistic($person);
			}
			
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
	}


	echo fnOutPersonnel($personnel);

	function fnDisplayStatistics($statistic){
		echo "<h3>Преподаватели без сайта или электронной почты</h3>";
		if (empty($statistic)) {
			echo "<p>Нет преподавателей без сайта или email.</p>";
		} else {
			echo "<table border=1 cellpadding=5>
				<tr>
					<th>ФИО</th>
					<th>Сайт</th>
					<th>Email</th>
				</tr>";
			foreach ($statistic as $row) {
				echo "<tr>
						<td>{$row['user']}</td>
						<td>{$row['site']}</td>
						<td>{$row['email']}</td>
					  </tr>";
			}
			echo "</table>";
		}
	}

	fnDisplayStatistics($statistic);

	?>
</body>
</html>