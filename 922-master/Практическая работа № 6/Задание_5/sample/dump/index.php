<<<<<<< HEAD

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
=======
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Функции</h1>
	<h2>Пользовательские функции</h2>
	
	<?php
		// подключаем функцию fnGetData()
		require 'function.php';	
		// получаем возвращаемый функцией массив
		$data = fnGetData();
		
		// забираем данные по категории
		$personnel = $data["personnel"];
		$courses = $data["courses"];
		$educations = $data["educations"];
		
		// получаем id из GET-параметра, если нет - ставим 1
		$id = isset($_GET['id']) ? $_GET['id'] : 1;
		
		// Функция поиска преподавателя по id
		function findPersonById($personnel, $id) {
			foreach ($personnel as $person) {
				if ($person['id_personnel'] == $id) {
					return $person;
				}
			}
			return null;
		}
		
		// Функция поиска образования по id преподавателя
		function findEduById($educations, $id) {
			$result = array();
			foreach ($educations as $edu) {
				if ($edu['id_personnel'] == $id) {
					$result[] = $edu;
				}
			}
			return $result;
		}
		
		// Функция поиска курсов по id преподавателя
		function findCoursesById($courses, $id) {
			$result = array();
			foreach ($courses as $course) {
				if ($course['id_personnel'] == $id) {
					$result[] = $course;
				}
			}
			return $result;
		}
		
		// Функция вывода персональных данных
		function getPersonData($data) {
			if (!$data) {
				echo "<p>Преподаватель не найден</p>";
				return;
			}
			echo "<h3>Персональные данные (ID: {$data['id_personnel']})</h3>";
			echo "<p>ФИО: {$data['surname']} {$data['name']} {$data['patronymic']}</p>";
			echo "<p>Должность: {$data['post']}</p>";
			echo "<p>Категория: {$data['category']}</p>";
			echo "<p>Общий стаж: {$data['experience_total']} лет</p>";
			echo "<hr>";
		};
		
		// Функция вывода образования
		function getPersonEdu($data) {
			if (empty($data)) {
				echo "<p>Нет данных об образовании</p>";
				return;
			}
			echo "<h3>Образование</h3>";
			foreach ($data as $edu) {
				echo "<p><strong>Учебное заведение:</strong> {$edu['institution']}</p>";
				echo "<p><strong>Квалификация:</strong> {$edu['qualification']}</p>";
				echo "<p><strong>Годы:</strong> {$edu['year_receipts']} - {$edu['year_release']}</p>";
				echo "<hr>";
			}
		};
		
		// Функция вывода курсов
		function getPersonCours($data) {
			if (empty($data)) {
				echo "<p>Нет данных о курсах</p>";
				return;
			}
			echo "<h3>Курсы</h3>";
			foreach ($data as $course) {
				echo "<p><strong>Название:</strong> {$course['name']}</p>";
				echo "<p><strong>Длительность:</strong> {$course['duration']} часов</p>";
				echo "<p><strong>Цена:</strong> {$course['price']} руб.</p>";
				echo "<hr>";
			}
		}
		
		// Находим данные по id
		$person = findPersonById($personnel, $id);
		$personEdu = findEduById($educations, $id);
		$personCourses = findCoursesById($courses, $id);
		
		// выводим данные
		getPersonData($person);
		getPersonEdu($personEdu);
		getPersonCours($personCourses);
	?>
	
	<p><a href="?id=1">Преподаватель 1</a> | <a href="?id=2">Преподаватель 2</a> | <a href="?id=3">Преподаватель 3</a> | <a href="?id=4">Преподаватель 4</a> | <a href="?id=5">Преподаватель 5</a></p>
	
</body>
</html>
>>>>>>> 33524df2dcfeaf9014d6e3b36a58766b1d388827
