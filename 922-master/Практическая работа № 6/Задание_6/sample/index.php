<!DOCTYPE html>
<html lang="ru">
<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    <h1>Функции</h1>
    <h2>Область видимости переменных</h2>
    <hr>
    <h2>Альбомы</h2>

    <?php
        require "album.php";
        require "team.php";

        function fnGetTeamName($id_team) {
            global $team;
            foreach ($team as $row) {
                if ($row['id_team'] == $id_team) {
                    return $row['name'];
                }
            }
            return "---";
        }

        function fnOutAlbum() {
            global $album;
            $tr = "";
            foreach ($album as $item) {

                $name = fnGetTeamName($item['id_team']);
                $tr .= "
                    <tr>
                        <td>{$item['id_album']}</td>
                        <td>{$item['title']}</td>
                        <td>{$item['date']}</td>
                        <td>{$item['country']}</td>
                        <td>$name</td>
                    </tr>
                ";
            }
            $out = "
                <table border=1 cellpadding=5>
                <tr>
                    <th>ID</th>
                    <th>Альбом</th>
                    <th>Дата выпуска</th>
                    <th>Страна</th>
                    <th>Наименование группы</th> <!-- Меняем заголовок -->
                </tr>
                {$tr}
                </table>
            ";
            return $out;
        }

        echo fnOutAlbum();

    ?>
=======
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Функции</h1>
	<h2>Область видимости переменных</h2>
	<hr>
	<h2>Альбомы</h2>
	
	<?php
		// включение файла album.php
		require "album.php";
		// включение файла team.php
		// require "team.php";
		
		function fnOutAlbum() {
			global $album;
			
			$tr = "";
			
			// перебираем массив $album для формирования таблицы
			foreach ($album as $key => $item) {
				
				$tr .= "
					<tr>
						<td>{$item['id_album']}</td>
						<td>{$item['title']}</td>
						<td>{$item['date']}</td>
						<td>{$item['country']}</td>
						<td>{$item['id_team']}</td>
					</tr>	
				";
			};

			$out = "
				<table border=1 cellpadding=5>
				<tr>
					<th>ID</th>
					<th>Альбом</th>
					<th>Дата выпуска</th>
					<th>Страна</th>
					<th>Идентификатор группы</th>
				</tr>
				{$tr}
				</table>
			";
			
			return $out;		
		}		
		
		// вывод альбомов из массива album
		echo fnOutAlbum();	
	?>
	

>>>>>>> 33524df2dcfeaf9014d6e3b36a58766b1d388827
</body>
</html>