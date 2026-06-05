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
require "albums.php";

// Используем array_map для обработки каждого элемента массива
$cleanAlbums = array_map(function($item) {
    // Обнулим новый массив
    $result = [];
    // Проходим по ключам каждого элемента
    foreach ($item as $key => $value) {
        // Удаляем HTML-теги
        $result[$key] = strip_tags($value);
    }
    return $result;
}, $albums);

// Теперь выводим очищенные данные
foreach ($cleanAlbums as $key => $item) {
    echo "<hr>";
    printf("
        Номер - %s<br />
        ID альбома: %d<br />
        Название: %s<br />
        Дата выпуска: %s<br />
        Лейбл: %s<br />
        Формат: %s<br />
        Статус: %s<p>
    ",
    ($key < 9) ? "000" . ++$key : "00". ++$key,
    $item['id'],
    $item['album_name'],
    $item['date'],
    $item['label'],
    $item['format'],
    $item['status']
    );
}
?>
	

</body>
</html>