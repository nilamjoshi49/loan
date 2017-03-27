<?php
class page_studentattendance_month extends Page{
	public $title="Total Attendance";
	function init(){
		parent::init();

		$form=$this->add('Form')->addClass('atk-col-4');
		$frm=$form->addField('dropdown','select student');
		
		$form->addField('DatePicker','from');
		// ->type('date');
		$form->addField('DatePicker','to');
		

		//b$form->addField('please select a student','student_id');
		$form->addSubmit()->addClass('atk-swatch-blue');

		if ($form->isSubmitted())
		{

			 $form->js()->univ()->$_GET('student_id');

		}
		
	}
}