<?php
class Model_StudentAttendance_Attendance extends SQL_Model{
	public $table="attendance";
	function init(){
		parent::init();

		$address = $this->ref('user_id')['address'];
		$totalattendance=$this->ref('student_id')['totalattendance'];

		$this->addExpression('Total Attendance')->set(function($m)
		{
			return $m->refSQL('StudentAttendance_Student')->count()->getOne();
		});
		


		$this->add('dynamic_model/Controller_AutoCreator');

	}
}