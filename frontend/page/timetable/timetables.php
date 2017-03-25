<?php
class page_timetable_timetables extends Page{
	public $title="Timetables for MCA Ist year";
	function init(){
		parent::init();

		$this->add('CRUD')->setModel('Timetable_Timetables');
	}
}