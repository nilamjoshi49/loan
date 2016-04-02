<?php

class Admin extends App_Admin {

    function init() {
        parent::init();

        $this->api->menu->addItem('Dashboard', '/');
        $this->api->menu->addItem('LoanAgreement','loanagreement');
        $this->api->menu->addItem('Contact','contact');
        $this->api->menu->addItem('Repayment','repay');
        $this->api->menu->addItem('Profile','loan');
        $this->dbconnect();
        $this->auth=$this->add('Auth');
        $this->auth->setModel('User','name');
        $this->auth->check();
    
    }
}
