<?php

class page_loan_assignloan extends Page{
	public $title = "AssignLoan";
	function init(){

		parent::init();

		$c = $this->add('CRUD');
		$c->setModel('UserFriend_AssignLoan');
	}
} 