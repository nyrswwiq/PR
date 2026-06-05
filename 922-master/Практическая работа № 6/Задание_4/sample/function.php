<?php
	function fnGetData () {
		require 'dump/personnel.php';
		require 'dump/courses.php';
		require 'dump/educations.php';

		return $data = array(
			'personnel' => $personnel,
			'courses' => $courses,
			'educations' => $educations
		);
	}