<?php
class page_studentattendance_addstudent extends Page{
	public $title="Add Student";
	function init(){
		parent::init();

		// $fm->addField('gender')->type('boolean');
		//$fm->addButton('addAttendace')->addClass('atk-swatch-blue');

		//$fm->addField('dob')->type('date');
		// $fm->addSubmit('Save')->addClass('atk-swatch-green');
		// if($fm->isSubmitted()){
		// 	$form->js()->univ()->location($this->app->url('studentattendance_student'))->execute(); 
		// }
		$this->add('CRUD')->setModel('StudentAttendance_StudentDetails');
		
	}
} 