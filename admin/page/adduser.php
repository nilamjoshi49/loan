<?php
class page_adduser extends Page{
	public $title="admin";
	function init(){
		parent::init();

		// $this->add('CRUD')->setModel('Quiz_User');
		$this->add('CRUD')->setModel('Quiz_Question');
		$this->add('CRUD')->setModel('Quiz_Category');
	}
}