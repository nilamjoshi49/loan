<?php
class Model_Twitter_User extends SQL_Model{
	public $table="user";
	function init(){
		parent::init();

		$this->addField('name')->mandatory(true);
		$this->addField('username');
		$this->addField('message')->type('text');
		$this->addField('Date')->type('date');
		$this->addField('Password')->type('password');

		$this->hasMany('Twitter_Tweet','owner_id',null,'Following_id');
		$this->hasMany('Twitter_Follow');

		$this->addExpression('My Followers')->set(function($m){
			return $m->refSQL('Twitter_Tweet')->count();
		});

		$this->addExpression('I am Follwoing')->set(function($m){
			return $m->refSQL('Twitter_Follow')->count();
		});

		$this->hasMany('Twitter_Tweet');

		$this->add('dynamic_model/Controller_AutoCreator');
	}
}