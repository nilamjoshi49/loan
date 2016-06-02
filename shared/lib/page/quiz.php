<?php
class page_quiz extends Page{
	public $title="Quiz";
	function init(){
		parent::init();

		$this->add('CRUD')->setModel('Quiz_User');

	}
} 