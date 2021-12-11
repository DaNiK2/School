<?php

class StudyTypeClass {
	public $study_type_array = ["Учится", "Выбыл", "Отдыхает"];
	public $type;

	public function __construct($key)
	{
		return $this->type = $this->study_type_array[$key];
	}
}