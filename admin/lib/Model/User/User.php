<?php
class Model_User_User extends SQL_Model{
	public $table="user";
	function init(){
		parent::init();

		$this->addField('name');
		$this->addField('password')->type('password');
		$this->addField('type')->Enum(['Admin','Frontuser','Backuser']);
		
		$this->add('dynamic_model/Controller_AutoCreator');
	}
}