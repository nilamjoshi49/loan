<?php
class page_student_signup extends Page{
	public $title="Sign Up";
	function init(){
		parent::init();

		// $form=$this->add('Form')->addClass('atk-col-3');
		// $form->addField('username');
		// $form->addField('password','password');
		// $form->addSubmit()->addClass('atk-swatch-green');
		$signup=$this->add('Form');

		$signup->addField('name');
		$signup->addField('password','password');
		//$signup->addField('dob')->type('date');
		$signup->addField('email-id');
		$signup->addField('address');
		$signup->addField('city');
		$signup->addField('message');
		$signup->addSubmit()->addClass('atk-swatch-green');

		if($signup->isSubmitted()){
			$signup->js()->univ()->location($this->app->url('student_stud'))->execute();
		}

	}	
}
// $form->addSubmit('Save');
// $save_and_add = $form->addSubmit('Save and Add New');

// $form->onSubmit(function($form) use ($save_and_add) {

//     $form->save();

//     if ($form->isClicked($save_and_add)) {
//         return $form->js()->univ()->redirect($form->app->url());
//     }

//     return $form->js()->univ->redirect($this->app->url('..'));
// });