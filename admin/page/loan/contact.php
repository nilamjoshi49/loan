<?php
class page_contact extends Page{
	public $title="Contact";

	function init(){
		parent::init();

		//$this->add('CRUD')->setModel('LoanAgreement');
		$this->add('CRUD')->setModel('Loan_Contact');
		//$this->add('CRUD')->setModel('Repayment');

	}
}