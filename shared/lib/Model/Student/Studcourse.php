<?php
class Model_Student_Studcourse extends SQL_Model{
	public $table="studcourse";
	function init(){
		parent::init();

		$this->addField('name');
		$this->addField('dob')->type('date');
		$this->addField('emailId');
		$this->addField('city');
		$this->addField('gender')->boolean('female','male');

		$this->addField('comment or message');
		$this->add('dynamic_model/Controller_AutoCreator');
	}
}