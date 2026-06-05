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

		require 'function.php';	
		$data = fnGetData();
		
	
		$person = $data["personnel"];
		$courses = $data["courses"];
		$educations = $data["educations"];
		
		function getPersonData($data) {
            $fio = $data['surname'] . ' ' . $data['name'] . ' ' . $data['patronymic'];
            $res = "<h3>Персональные данные</h3>";
            $res .= "<table border='1' cellpadding='5'>";
            $res .= "<tr><td>ФИО</td><td>$fio</td></tr>";
            $res .= "<tr><td>Должность</td><td>{$data['post']}</td></tr>";
            $res .= "<tr><td>Категория</td><td>{$data['category']}</td></tr>";
            $res .= "<tr><td>Уровень образования</td><td>{$data['level_edu']}</td></tr>";
            $res .= "<tr><td>Общий стаж (лет)</td><td>{$data['experience_total']}</td></tr>";
            $res .= "<tr><td>Стаж в колледже (лет)</td><td>{$data['experience_college']}</td></tr>";
            $res .= "</table>";
            return $res;
        }
		
		function getPersonEdu($data) {
            $res = "<h3>Образование</h3>";
            if(empty($data)) return $res . "Нет данных";
            $res .= "<table border='1' cellpadding='5'><tr>"
            . "<th>Учебное заведение</th>"
            . "<th>Квалификация</th>"
            . "<th>Специальность</th>"
            . "<th>Годы обучения</th>"
            . "<th>Примечание</th>"
            . "</tr>";

            foreach ($data as $edu) {
                $res .= "<tr>"
                . "<td>{$edu['institution']}</td>"
                . "<td>{$edu['qualification']}</td>"
                . "<td>{$edu['specialty']}</td>"
                . "<td>{$edu['year_receipts']}-{$edu['year_release']}</td>"
                . "<td>{$edu['note']}</td>"
                . "</tr>";
            }

            $res .= "</table>";
            return $res;
        }	
		
		function getPersonCours($data) {
            $res = "<h3>Курсы</h3>";
            if(empty($data)) return $res . "Нет данных";
            $res .= "<table border='1' cellpadding='5'><tr>"
            . "<th>Название</th>"
            . "<th>Длительность (часы)</th>"
            . "<th>Цена (руб.)</th>"
            . "</tr>";

            foreach ($data as $course) {
                $res .= "<tr>"
                . "<td>{$course['name']}</td>"
                . "<td>{$course['duration']}</td>"
                . "<td>{$course['price']}</td>"
                . "</tr>";
            }

            $res .= "</table>";
            return $res;
        }

		echo getPersonData($person);
		echo getPersonEdu($educations);
		echo getPersonCours($courses);

	?>
	

</body>
</html>