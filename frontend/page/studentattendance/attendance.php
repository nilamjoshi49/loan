<?php
class page_studentattendance_attendance extends Page{
	public $title="Total Attendance";
	function init(){
		parent::init();

		$m = $this->add('Model_Person_Attendance');
		$student = $this->add('Model_Person_Student');
		$this->add('CRUD')->setModel($student);
		$this->add('CRUD')->setModel($m);

	}
}