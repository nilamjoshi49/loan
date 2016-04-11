<?php
class page_twitter_admin extends Page{
	public $title="Admin";
	function init(){
		parent::init();

		$this->add('Auth');
		$this->setModel('Twitter_Admin','username');
		$this->check();
		$this->add('CRUD')->setModel('Twitter_Admin');
	}
}