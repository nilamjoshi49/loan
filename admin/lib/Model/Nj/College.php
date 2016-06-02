<?php
class Model_Nj_College extends SQL_Model{
	public $table="college";
	function init(){
		parent::init();

		$this->addField('class');
		$this->hasMany('Nj_College');

		$this->add('dynamic_model/Controller_AutoCreator');
	}

}