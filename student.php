<?php
include "human.php";
class Student extends Human {

	public $scores = [];
	
	public function __construct($lastname, $name, $secname, $score) {
		parent::__construct ($lastname, $name, $secname);
		$this->scores = $score;
	}

	public function averageScore() {
		$count = count($this->scores);
		$sum = 0;

		for ($i = 0; $i < $count; $i++) {
			$sum += $this->scores[$i];
		}

		$average_score = (float)$sum / (float)$count;

		return $average_score;
	}
}
