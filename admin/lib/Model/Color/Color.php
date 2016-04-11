<?php
class Model_Color_Color extends SQL_Model{
	public $table="color";
	function init(){
		parent::init();

		$this->hasOne('Color_Name');
		$this->addField('flower');

		$this->add('dynamic_model/Controller_AutoCreator');
	}
}