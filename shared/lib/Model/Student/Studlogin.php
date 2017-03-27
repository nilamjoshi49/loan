<?php
class Model_Student_Studlogin extends SQL_Model{
	public $table="studlogin";
	function init(){
		parent::init();

		$this->addField('username');
		$this->addField('password');
		
		$this->add('dynamic_model/Controller_AutoCreator');
	}
}