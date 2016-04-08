<?php
class Model_UserFriend_Repay extends SQL_Model{
	public $table="repay";

	function init(){
		parent::init();

		$this->addField('amount');
		$this->addField('date')->type('datetime');
		$this->hasOne('UserFriend_Loan');

		$this->add('dynamic_model/Controller_AutoCreator');
	}
}