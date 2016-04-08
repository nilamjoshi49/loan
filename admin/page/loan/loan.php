<?php

class page_loan_loan extends Page{
	public $title = "Loan";
	function init(){

		parent::init();


		$c = $this->add('CRUD');
		$c->setModel('UserFriend_Loan');
		
	}
} 