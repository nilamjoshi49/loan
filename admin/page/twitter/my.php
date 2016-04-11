<?php
class page_twitter_my extends Page{
	public $title="My";
	function init(){
		parent::init();

		$this->app->auth->check();
		$this->title .= ' '.$this->app->auth->model['username'];
	}
}