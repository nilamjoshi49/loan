<?php
class Model_Quiz_User extends SQL_Model{
	public $table="user";
	function init(){
		parent::init();


		$this->addField('user');
		$this->addField('username');
		$this->addField('password');
		

		$this->add('dynamic_model/Controller_AutoCreator');
	}
}