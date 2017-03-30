<?php
class page_twitter_tweet extends Page{
	public $title="User Tweets";
	function init(){
		parent::init();

		$this->add('CRUD')->setModel('Twitter_Tweet');
		$this->add('CRUD')->setModel('Twitter_Follow');

	}
}