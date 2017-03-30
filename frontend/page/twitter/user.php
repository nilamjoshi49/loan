<?php
class page_twitter_user extends Page{
	public $title="User Login";
	function init(){
		parent::init();

		$this->add('CRUD')->setModel('Twitter_User');
	}
}