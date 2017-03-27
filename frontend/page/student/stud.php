<?php 
class page_student_stud extends Page{
	public $title="Student";
	function init(){
		parent::init();

		 $this->add('CRUD')->setModel('Student_Studlogin');
		// $form=$this->add('Form')->setClass('atk-col-4');
		// $form->addField('username');
		// $password=$form->addField('password');
		// $form->addSubmit()->setClass('atk-swatch-green');

		// if($form->isSubmitted){
		// 	if($form=>['password']== $studfield)
		// }

		// if('isSubmitted'){

		// }


		// if('')


	}
}