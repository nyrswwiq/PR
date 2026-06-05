<?php
<<<<<<< HEAD
	function fnGetData () {
		require 'dump/personnel.php';
		require 'dump/courses.php';
		require 'dump/educations.php';

=======
	// функция получения данных
	// в реальном приложении данные будут получаться из баз данных
	// сейчас это не принципиально 
	function fnGetData () {
		// подключаем файлы, получаем данные
		require 'dump/personnel.php';
		require 'dump/courses.php';
		require 'dump/educations.php';
		// теперь внутри функции доступны МАССИВЫ
		// - $personnel
		// - $courses
		// - $educations 
		
		// данные получили, можно их упаковать в ассоциативный массив и
		// отдать во внешнее приложение
>>>>>>> 33524df2dcfeaf9014d6e3b36a58766b1d388827
		return $data = array(
			'personnel' => $personnel,
			'courses' => $courses,
			'educations' => $educations
		);
	}