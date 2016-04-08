<?php
	class Model_UserFriend_AssignLoan extends SQL_Model{
	public $table="assignloan";
		function init(){
			parent::init();

			$this->hasOne('UserFriend_Friends','friend_id');
			$this->hasOne('UserFriend_Loan','loan_id');

			$this->addExpression('name')->set(function($m){
				return $m->refSQl('loan_id')->FieldQuery('name');
			});

			$this->add('dynamic_model/Controller_AutoCreator');
		}
	}