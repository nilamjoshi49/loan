<?php
class Model_Timetable_Faculty extends SQL_Model{
	public $table="faculty";
	function init(){
		parent::init();

		$this->addField('username');
		$this->addField('password');
		

		$this->add('dynamic_model/Controller_AutoCreator');
	}

}