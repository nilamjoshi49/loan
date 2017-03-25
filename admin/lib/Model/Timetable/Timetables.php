<?php
class Model_Timetable_Timetables extends SQL_Model{
	public $table="timetables";

	function init(){
		parent::init();

		$this->hasOne('Timetable_Course');
		$this->hasOne('Timetable_Year');
		$this->addField('exam_date')->type('date');
		$this->addField('exam_day');
		$this->addField('exam_time');
		$this->addField('subject');


		$this->add('dynamic_model/Controller_AutoCreator');
	}
}