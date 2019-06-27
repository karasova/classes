<?php
include "student.php";
function getData ($students) {

	$fdata = file_get_contents("Data/Data.txt");
	$fscores = file_get_contents("Data/Score.txt");

	$fdata = explode ("\n", $fdata);
	$fscores = explode ("\n", $fscores);

	foreach ($fdata as $key => $value) {
		$scores = explode (" ", $fscores[$key]);
		$student = explode (" ", $fdata[$key]);
		$student_name = new Student ($student[0], $student[1], $student[2], $scores);
		array_push ($students, $student_name);
	}

	return $students;
}