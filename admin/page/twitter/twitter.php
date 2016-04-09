<?php
class page_twitter_twitter extends Page{
	public $title="Twitter";
	function init(){
		parent::init();

		$u=$this->add('CRUD')->setModel('Twitter_User');
		$t=$this->add('CRUD')->setModel('Twitter_Tweet');
		$f=$this->add('CRUD')->setModel('Twitter_Follow');
	}
}