<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Функции</h1>
	<h2>Область видимости переменных</h2>

	<?php
		// включение файла 
		require "personnel.php";

		// функция, выполняющая изменения значения массива

		// изменяемы массив определяется значением $num
		// ключ массива для изменения определяется значением $term
		// новое значение ключа определяется значением $val
		function fnChangingTerm($person, $term, $val) {
		
			// функция состоит из одной инструкции
			$person[$term] = $val;
		}

		// все параметры функции берутся из строки запроса

		// строка запроса может выглядеть следующим образом:
		// ?num=1&term=surname&val=Иванов	
		// или так
		// ?num=2&term=post&val=Мастер	
		
		$num = $_GET["num"];
		$term = $_GET["term"];
		$val = $_GET["val"];
		
		// вызов функции изменяющей значение массива
		// номер изменяемого вложенного массива определяется значением $id
		fnChangingTerm($personnel[$num], $term, $val);	

		echo "<pre>";
		var_dump($personnel[$num]);
		echo "</pre>";
	?>
	

</body>
</html>