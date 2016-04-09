<?php 
class Model_Twitter_Follow extends SQL_Model{
	public $table="follow";
	function init(){
		parent::init();

		$this->hasOne('Twitter_User','owner_id');
		$this->hasOne('Twitter_User');

		$this->add('dynamic_model/Controller_AutoCreator');
	}
}