<?php
class page_twitter_twitter extends Page{
	public $title="Twitter";
	function init(){
		parent::init();

		
		$this->add('CRUD')->addClass('atk-push')->setModel('Twitter_User');
		$t=$this->add('CRUD')->addClass('atk-push')->setModel('Twitter_Tweet');
		$this->add('CRUD')->addClass('atk-push')->setModel('Twitter_Follow');
	

	

	}
}