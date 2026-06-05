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
<<<<<<< HEAD

		require 'function.php';	
		$data = fnGetData();
		
	
=======
		require 'function.php';	
		$data = fnGetData();
		
		// забираем данные по категории
>>>>>>> 33524df2dcfeaf9014d6e3b36a58766b1d388827
		$person = $data["personnel"];
		$courses = $data["courses"];
		$educations = $data["educations"];
		
<<<<<<< HEAD
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
	

=======
		// Функция вывода персональных данных
		function getPersonData($data) {
			echo "<h3>Персональные данные</h3>";
			echo "<p>ФИО: {$data['surname']} {$data['name']} {$data['patronymic']}</p>";
			echo "<p>Должность: {$data['post']}</p>";
			echo "<p>Категория: {$data['category']}</p>";
			echo "<p>Общий стаж: {$data['experience_total']} лет</p>";
			echo "<hr>";
		};
		
		// Функция вывода образования
		function getPersonEdu($data) {
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
			echo "<h3>Курсы</h3>";
			foreach ($data as $course) {
				echo "<p><strong>Название:</strong> {$course['name']}</p>";
				echo "<p><strong>Длительность:</strong> {$course['duration']} часов</p>";
				echo "<p><strong>Цена:</strong> {$course['price']} руб.</p>";
				echo "<hr>";
			}
		}
		
		// выводим персональные данные
		getPersonData($person);
		// выводим данные об образовании
		getPersonEdu($educations);
		// выводим данные о курсах
		getPersonCours($courses);
	?>
	
>>>>>>> 33524df2dcfeaf9014d6e3b36a58766b1d388827
</body>
</html>