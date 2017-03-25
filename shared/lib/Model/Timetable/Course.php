<?php
class Model_Timetable_Course extends SQL_Model{
	public $table="course";
	public $title_field="course_name";
	function init(){
		parent::init();

		$this->addField('course_name');

		

		$this->add('dynamic_model/Controller_AutoCreator');

	}
}