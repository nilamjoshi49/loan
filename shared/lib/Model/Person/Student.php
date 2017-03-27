<?php

/**
* 
*/
class Model_Person_Student extends SQL_Model
{
	public $table ="person_student";
	function init()
	{
		parent::init();

		$this->addField('name');
		$this->addField('dob')->type('date');
		$this->hasMany('Person_Attendance','student_id');

		$present=$this->addExpression('total_present')->set(function($m,$q){
			return $m->refSQL('Person_Attendance')
					->addCondition('mark_present',true)
					->count();
		});

		$this->add('dynamic_model/Controller_AutoCreator');
	}
}