<?php
class page_repay extends SQL_Model{

	public $title="Repayment";

	function init(){
		parent::init();
		
		$f = $this->add('Form');
		$f->addField('Dropdown','user')->setModel('Model_User');
		$f->addField('Dropdown','loan')->setModel('Model_LoanAgreement');
		$f->addField('amount')->validateNotNull();
	}
}