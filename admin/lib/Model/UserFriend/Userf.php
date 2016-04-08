<?php
 	class Model_UserFriend_Userf extends SQL_Model{
 	public $table="userf";
 	function init(){
 		parent::init();

			$this->addField('name');

			$this->hasMany('UserFriend_Friends');

			$this->add('dynamic_model/Controller_AutoCreator');
 		}
 	}