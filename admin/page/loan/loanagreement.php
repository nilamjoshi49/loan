<?php

class page_loanagreement extends Page{
	public $table="LoanAgreement";

	function init(){
		parent::init();

		$this->add('CRUD')->setModel('Loan_LoanAgreement');
	}
}