<?php

require_once "StudyTypeClass.php";
require_once "./interfaces/SchoolInterface.php";

class SchoolClass extends StudyTypeClass implements SchoolInterface {
	public $age;
	public $name;
	public $nickname;

	public function __construct($type,$gender, $name, $age, $nickname)
	{
		$this->type = parent::__construct($type);
		$this->gender = $gender;
		$this->name = $name;
		$this->age = $age;
		$this->nickname = $nickname;
	}


	/*public function get_name()
	{
		echo $this->name;
	}*/

	public function info() {
		echo "{$this->gender} {$this->name} под прозвищем {$this->nickname} {$this->type}  <br>";
	}
}
