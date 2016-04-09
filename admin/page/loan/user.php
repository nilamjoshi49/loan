<?php

class page_user extends Page{
	public $table="user";

	function init(){
		parent::init();

		$this->add('CRUD')->setModel('Loan_User');
	}
}