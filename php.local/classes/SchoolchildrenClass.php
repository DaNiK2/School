<?php

require_once "SchoolClass.php";

class SchoolchildrenClass extends SchoolClass {
	public function __construct($type, $gender, $name, $age, $nickname)
	{
		parent::__construct($type, $gender, $name, $age, $nickname);
	}
}