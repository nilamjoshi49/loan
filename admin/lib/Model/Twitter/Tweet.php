<?php
class Model_Twitter_Tweet extends SQL_Model{
	public $table="tweet";
	function init(){
		parent::init();

		$this->addField('name')->caption('Username');
		$this->addField('Date')->Type('date');
		$this->addField('Message')->Type('text');
		$this->hasOne('Twitter_User');

	

		$this->add('dynamic_model/Controller_AutoCreator');

	}
}