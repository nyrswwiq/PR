<?php
require "personnel.php";

function fnChangingTerm(&$person, $term, $val) {
    if (is_array($person) && isset($person[$term])) {
        $person[$term] = $val;
    }
}


$massage = "";
if (isset($_GET['num']) && isset($_GET['term']) && isset($_GET['val'])) {
    $num = $_GET['num'];
    $term = $_GET['term'];
    $val = $_GET['val'];

    if (isset($personnel[$num])) {
        fnChangingTerm($personnel[$num], $term, $val);
        $massage = "Изменения сохранены.";
        $changed_person = $personnel[$num];
    } else {
        $massage = "Массив с индексом $num не найден.";
    }
} else {
    $massage = "Параметры не переданы или некорректны.";
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="lol.css">
    <style>
        header {
  border-bottom: 3px solid #000000; /* линия снизу */
  /* остальные свойства остаются */
}

/* Подвал сайта */
footer {
  border-top: 3px solid #000000; /* линия сверху */
  background-color: #998c8c;
  padding: 1em;
  text-align: center;
  margin-top: 2em; /* расстояние сверху */
}

    </style>
	<meta charset="UTF-8" />
	<title>Программирование на языке PHP</title>
</head>
<body>
<h1>Функции</h1>
<h2>Область видимости переменных</h2>

<?php
if ($massage) {
    echo "<p>$massage</p>";
}

if (isset($changed_person)) {
    echo "<h3>Обновлённый массив преподавателя:</h3>";
    echo "<pre>";
    var_dump($changed_person);
    echo "</pre>";
}
?>


<h3>Поменять данные через GET-запрос</h3>
<form method="get">
    <label>Индекс преподавателя (num):</label><br>
    <input type="text" name="num"><br>
    <label>Ключ для изменения (term):</label><br>
    <input type="text" name="term"><br>
    <label>Новое значение (val):</label><br>
    <input type="text" name="val"><br>
    <button type="submit">Изменить</button>
</form>

</body>
</html>