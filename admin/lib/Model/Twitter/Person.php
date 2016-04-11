<?php 
class Model_Twitter_Person extends SQL_Model{
	public $table="person";
	function init(){
		parent::init();

		// $this->hasOne('Twitter_User','owner_id');
		// $this->hasOne('Twitter_User');

		$this->add('dynamic_model/Controller_AutoCreator');
	}
}