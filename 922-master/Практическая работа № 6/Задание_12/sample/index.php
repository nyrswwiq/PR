<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Анонимные функции</h2>
	
	<?php		
		// включаем массив
		require "albums.php";
		
		// определяем callback-функцию
		$callback = function ($item) {
			// если в строке ключе статуса есть вхождение строки Серебряный
			// отбираем этот массив
			if (strpos($item["status"], "Серебряный") != ""){
				return $item;
			}
		};

		// вызываем array_map
		$res = array_map($callback, $albums);
		
		// выводим результат
		echo "<pre>";
		var_dump($res);
		echo "</pre>";
	?>
	

</body>
</html>