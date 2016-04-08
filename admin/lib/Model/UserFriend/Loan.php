<?php
	class Model_UserFriend_Loan extends SQL_Model{
		public $table="loan";
			function init(){
				parent::init();

				$this->addField('name')->caption('Amount');
				$this->hasOne('UserFriend_Repay');

				$this->add('dynamic_model/Controller_AutoCreator');
			}
	}