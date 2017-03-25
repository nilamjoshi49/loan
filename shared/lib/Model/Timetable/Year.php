<?php
class Model_Timetable_Year extends SQL_Model{
	public $table="year";
	public $title_field="Addyear";
	function init(){
		parent::init();

		$this->hasOne('Timetable_Course');
		$this->addField('Addyear');

		$this->add('dynamic_model/Controller_AutoCreator');
	}
}