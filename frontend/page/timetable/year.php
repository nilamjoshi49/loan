<?php
class page_timetable_year extends Page{
	public $title="Year of Courses";
	function init(){
		parent::init();

		$this->add('CRUD')->setModel('Timetable_Year');
	}
}
