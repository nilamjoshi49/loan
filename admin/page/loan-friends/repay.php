<?php

class page_loan_repay extends Page{
	public $title = "Repay";
	function init(){

		parent::init();


		$this->api->stickyGET('friend_id');

		$friends = $this->add('Model_UserFriend_Friends');
		$friends->load($_GET['friend_id']);

		$loan = $this->add('Model_UserFriend_AssignLoan');
		$loan->addCondition('friend_id',$_GET['friend_id']);

		$f = $this->add('Form');
		$f->addField('Dropdown','friend')->setModel($friends);
		$f->addField('Dropdown','loan')->setModel($loan);
		$f->addField('amount')->validateNotNull();
		
		//$f->addSubmit('Repay');
		//$f->onSubmit(function($form){
		//	return $this->js()->univ()->alert('payment returned');
		//});
	}
} 