<?php
class page_auth_auth extends Page{
	public $title="Login";
	function init(){
		parent::init();

		// $this->add('CRUD')->setModel('Quiz_User');
		$auth=$this->add('Auth');
        $auth->setModel('Quiz_User','username','password');
        $auth->check();

        // $this->add('Auth');
        // $this->setModel('Quiz_User','username','password');
        // $this->check();
	}
}