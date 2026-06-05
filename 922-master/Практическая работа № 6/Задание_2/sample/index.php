<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
require "album.php";
function fnOutAlbum($arr) {
    $out = '
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Альбом</th>
            <th>Дата выпуска</th>
            <th>Страна</th>
        </tr>
    ';

    foreach ($arr as $item) {
        $out .= "<tr>
            <td>{$item['id_album']}</td>
            <td>{$item['title']}</td>
            <td>{$item['date']}</td>
            <td>{$item['country']}</td>
        </tr>";
    }

    $out .= '</table>';
    return $out;
}
echo fnOutAlbum($album);
?>
=======
<?php
//  Подключаем файл с массивом
require "album.php";


function fnOutAlbum($arr) {
 
    $out = "<table border='1' cellpadding='5' cellspacing='0'>";
    $out .= "<tr>";
    $out .= "<th>ID</th>";
    $out .= "<th>Альбом</th>";
    $out .= "<th>Дата выпуска</th>";
    $out .= "<th>Страна</th>";
    $out .= "</tr>";
    
   
    foreach ($arr as $item) {
        $out .= "<tr>";
        $out .= "<td>{$item['id_album']}</td>";
        $out .= "<td>{$item['title']}</td>";
        $out .= "<td>{$item['date']}</td>";
        $out .= "<td>{$item['country']}</td>";
        $out .= "</tr>";
    }
    
    $out .= "</table>";
    
    // Возвращаем сформированную строку
    return $out;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Список альбомов</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 600px;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>Список альбомов</h1>

    <?php
    //Выводим альбомы из массива album
    echo fnOutAlbum($album);
    ?>

>>>>>>> 33524df2dcfeaf9014d6e3b36a58766b1d388827
</body>
</html>