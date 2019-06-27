<?php
class Human
{
	private $name;
	private $lastname;
	private $secondname;
	
	public function __construct($lastname, $name, $secname)
	{
		$this->lastname = $lastname;
		$this->name = $name;
		$this->secondname = $secname;
	}
	public function fullname()
	{
		$fullname = $this->lastname . " " . $this->name . " " . $this->secondname;
		return $fullname;
	}
}