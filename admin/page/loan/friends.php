<?php

class page_loan_friends extends Page{
	public $title = "Friends";
	function init(){

		parent::init();

		$user_id = $this->api->stickyGET('id');

		$friend = $this->add('Model_UserFriend_Friends');
		$friend->addCondition('user_id',$user_id);
		$c = $this->add('CRUD');
		$c->setModel($friend);

		$c->grid->addFormatter('name','link',['page'=>'loan_repay','friend_id'=>'id']);

	}
} 