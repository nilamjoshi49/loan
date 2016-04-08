<?php

class page_loan_user extends Page{
	public $title = "User";
	function init(){

		parent::init();


		$c = $this->add('CRUD');
		$c->setModel('UserFriend_Userf');
		$c->grid->addFormatter('name','link',['page'=>'loan_friends','user_id'=>'id']);
	}
} 