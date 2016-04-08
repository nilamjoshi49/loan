<?php

class Model_UserFriend_Order extends SQL_Model{
	public $table="order";
	function init(){
		parent::init();

		$this->addField('name');
		$this->addField('total');
		$this->addField('discount');
		$this->addField('net_amount');

		$this->hasMany('UserFriend_Item');


		$this->add('dynamic_model/Controller_AutoCreator');
	}
}