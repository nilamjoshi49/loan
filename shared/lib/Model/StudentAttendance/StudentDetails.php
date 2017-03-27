<?php
class Model_StudentAttendance_StudentDetails extends SQL_Model{
	public $table="studentdetails";
	public $title_field="firstname";
	function init(){
		parent::init();

		$this->addField('firstname');
		$this->addField('lastname');
		$this->addField('email');
		$this->addField('phone');

		// $present=$this->addExpression('total_present')->set(function($m,$q){
		// 	return $m->refSQL('Model_StudentAttendance_Student')
		// 			->addCondition('mark_present',true)
		// 			->count();
		// });
		// $this->addExpression('My Follwers')->set(function($m)
		// {
		// 	return $m->refSQL('StudentAttendance_Student')->count();
		// });

		//$this->hasOne('StudentAttendance_Student');



		$this->add('dynamic_model/Controller_AutoCreator');
	}
}