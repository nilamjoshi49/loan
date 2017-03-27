<?php

/**
* 
*/
class Model_Person_Attendance extends SQL_Model{
	public $table ="person_attendance";
	function init(){
		parent::init();

		$this->hasOne('Person_Student','student_id');
		$this->addField('mark_present')->type('boolean');
		$this->addField('created_at')->type('date');

		$this->add('dynamic_model/Controller_AutoCreator');
	}
}