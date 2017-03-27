<?php
class Model_StudentAttendance_Student extends SQL_Model{
	public $table="student";
	public $title_field="addattendance";
	function init(){
		parent::init();

		$this->hasOne('StudentAttendance_StudentDetails');
		$this->addField('adddate')->type('date');
		$this->addField('mark_present')->type('boolean');

		//$this->js()->univ()->count();
		$this->add('dynamic_model/Controller_AutoCreator');
	}

}