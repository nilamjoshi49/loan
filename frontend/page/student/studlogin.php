<?php 
class page_student_studlogin extends Page{
	public $title="Student Login";
	function init(){
		parent::init();

		// $this->add('CRUD')->setModel('Student_Studlogin');
		$form=$this->add('Form')->setClass('atk-col-4');
		$form->addField('username');
		$form->addField('password');
		$form->addSubmit()->setClass('atk-swatch-green');
		if($form->isSubmitted()){
			$form->js()->univ()->location($this->app()->url('student_signup'))->execute();
		}
		$form->addButton('Signup')->setClass('atk-swatch-blue');

		// if($form->isSubmitted()){

		// // 	if($form==['username'] && $form ==['password']){
		// // 		$form->js()->univ()->location($this->app()->url('student_stud'))->execute();
		// // 	}
		// // else
		// // 	$form->

		// 	}


		// if('isSubmitted'){

		// }


		// if('')


	}
}