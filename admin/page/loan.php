<?php

class page_loan extends Page{
	public $table="Loan";

	function init(){
		parent::init();

		$this->add('CRUD')->setModel('User');
	}
}