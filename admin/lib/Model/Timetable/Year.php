<?php
class Model_Timetable_Year extends SQL_Model{
	public $table="year";
	function init(){
		parent::init();

		$this->addField('year');

		$this->add('dynamic_model/Controller_AutoCreator');
	}
}