<?php
class Model_Timetable_Course extends SQL_Model{
	public $table="course";
	function init(){
		parent::init();

		$this->addField('course_name');
		

		$this->add('dynamic_model/Controller_AutoCreator');

	}
}