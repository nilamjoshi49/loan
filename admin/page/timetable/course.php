<?php
class page_timetable_course extends Page
{
	public $title="Courses";
	function init(){
		parent::init();


		$this->add('CRUD')->setModel('Timetable_Course');
		
		// if($course_name=='coursename')
	}

}
