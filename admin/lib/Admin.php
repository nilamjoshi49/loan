<?php

class Admin extends App_Admin {

    function init() {
        parent::init();

        $this->api->menu->addItem('Dashboard', '/');
        //$this->api->menu->addItem('Contact','contact');
        // $this->app->pathfinder->addLocation([
        //     'php'=>'.'])
        // ->setBasePath(dirname($this->app->pathfinder->base_location->base_path).'/shared-lib');       
        $this->dbconnect();

        // $this->auth=$this->add('Auth');
        // $this->auth->setModel('Twitter_User');
        
        // // $this->auth->setModel('Twitter_User','name');
        // // $this->auth->check();
        //  $this->api->menu->addItem('Twitter','/');
        //  $this->api->menu->addItem('My Tweets','my');
        //  $this->api->addItem('Admin','admin');


       // $m->addItem('LoanAgreement','loanagreement');
        // $m=$this->app->layout->add('Menu_Horizontal',null,'Top_Menu');
        // $m->addItem('Contact','contact');
        // $m->addItem('Profile','loan');
        // $m->addItem('Logout');
       // $m->addItem('Repayment','repay');
        // $user=$m->addMenu('User');
        // $user->addItem('User');
        // $user->addItem('Change Password');
        // $user->addItem('SignUp');
    
    }
}
