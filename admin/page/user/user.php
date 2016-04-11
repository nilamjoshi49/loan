<?php
class page_user_user extends Page{
	public $title="User";
	function init(){
		parent::init();

		$this->add('CRUD')->setModel('User_User');
		
	}
}