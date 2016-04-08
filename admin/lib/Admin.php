<?php

class Admin extends App_Admin {

    function init() {
        parent::init();

        $this->api->menu->addItem('Dashboard', '/');
       
        $this->dbconnect();
        $this->auth=$this->add('Auth');
        $this->auth->setModel('User','name');
        $this->auth->check();


       // $m->addItem('LoanAgreement','loanagreement');
        $m=$this->app->layout->add('Menu_Horizontal',null,'Top_Menu');
        $m->addItem('Contact','contact');
        $m->addItem('Profile','loan');
        $m->addItem('Logout');
       // $m->addItem('Repayment','repay');
        // $user=$m->addMenu('User');
        // $user->addItem('User');
        // $user->addItem('Change Password');
        // $user->addItem('SignUp');
    
    }
}
