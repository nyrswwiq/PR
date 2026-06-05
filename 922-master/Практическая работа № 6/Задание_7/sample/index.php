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

		require "album.php";

		require "team.php";

		require "fun.php";

		echo fnOutAlbum($album, $team);
	?>
	

</body>
</html>