<?php
class page_studentattendance_student extends Page{
	public $title="Student";

	function init(){
		parent::init();


		$this->add('CRUD')->setModel('StudentAttendance_Student');
		//$this->addField('addattendance');

	}
}