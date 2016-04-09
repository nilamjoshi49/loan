<?php
class page_repayment extends SQL_Model{

	public $title="Repayment";

	function init(){
		parent::init();
		
		$f = $this->add('Form');
		$f->addField('Dropdown','user')->setModel('Model_Loan_Repayment');
		//$f->addField('Dropdown','loan')->setModel('Model_LoanAgreement');
		$f->addField('amount')->validateNotNull();
	}
}