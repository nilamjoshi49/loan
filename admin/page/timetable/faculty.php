<?php
class page_timetable_faculty extends Page
{
	public $title="Faculty Login";
	function init(){
		parent::init();

		$form=$this->add('Form')->addClass('atk-col-3');
		$form->addField('username');
		$form->addField('password','password');
		$form->addSubmit()->addClass('atk-swatch-green');

		if($form->isSubmitted()){
		$form->js()->univ()->location($this->app->url('timetable_course'))->execute(); 
	}		

		//$this->add('CRUD')->setModel('Timetable_Faculty');
	}

}

