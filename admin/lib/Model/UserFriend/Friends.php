<?php
	class Model_UserFriend_Friends extends SQL_Model{
		public $table="friends";
			function init()
			{
				parent::init();

				$this->hasOne('UserFriend_Userf','user_id');
				$this->addField('name');

				$this->add('dynamic_model/Controller_AutoCreator');
			}
	}