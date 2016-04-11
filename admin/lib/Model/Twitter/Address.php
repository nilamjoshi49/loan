<?php 
class Model_Twitter_Address extends SQL_Model{
	public $table="address";
	function init(){
		parent::init();

		// $this->hasOne('Twitter_User','owner_id');
		// $this->hasOne('Twitter_User');

		$this->add('dynamic_model/Controller_AutoCreator');
	}
}