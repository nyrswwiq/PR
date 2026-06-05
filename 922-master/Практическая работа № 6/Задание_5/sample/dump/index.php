
<?php

$id = isset($_GET['id']) ? intval($_GET['id']) : 1;


$person = null;
		require 'personnel.php';
		require 'courses.php';
		require 'educations.php';
foreach ($personnel as $p) {
    if ($p['id_personnel'] == $id) {
        $person = $p;
        break;
    }
}


if (!$person) {
    echo "Преподаватель с id=$id не найден.";
    exit;
}


$courses_list = [];
foreach ($courses as $c) {
    if ($c['id_personnel'] == $id) {
        $courses_list[] = $c;
    }
}


$edu_list = [];
foreach ($educations as $e) {
    if ($e['id_personnel'] == $id) {
        $edu_list[] = $e;
    }
}
echo "<h2>Информация о преподавателе</h2>";
echo "<strong>{$person['surname']} {$person['name']} {$person['patronymic']}</strong><br>";
echo "Должность: {$person['post']}<br>";
echo "Категория: {$person['category']}<br>";
echo "Образование: {$person['level_edu']}<br>";
echo "Общий стаж: {$person['experience_total']} лет<br>";
echo "Стаж в колледже: {$person['experience_college']} лет<br>";
if (!empty($person['email'])) {
    echo "E-mail: {$person['email']}<br>";
}
if (!empty($person['site'])) {
    echo "Сайт: {$person['site']}<br>";
}


echo "<h3>Образование</h3>";
if (count($edu_list) > 0) {
    foreach ($edu_list as $ed) {
        echo "<ul>";
        echo "<li><strong>{$ed['institution']}</strong> ({$ed['qualification']}, {$ed['specialty']})";
        if (!empty($ed['year_receipts']) && !empty($ed['year_release'])) {
            echo ", {$ed['year_receipts']}-{$ed['year_release']}";
        }
        echo "</li>";
        echo "</ul>";
    }
} else {
    echo "Нет данных.<br>";
}


echo "<h3>Ведёт курсы</h3>";
if (count($courses_list) > 0) {
    echo "<ol>";
    foreach ($courses_list as $course) {
        echo "<li><strong>{$course['name']}</strong> ({$course['duration']} часов)";
        if (!empty($course['price']))
            echo ", стоимость: {$course['price']}";
        echo "</li>";
    }
    echo "</ol>";
} else {
    echo "Нет курсов.<br>";
}
?>