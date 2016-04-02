<?php

class Model_User extends SQL_Model {
    public $table='user';

    function init() {
        parent::init();

        $this->addField('name');
        $this->addField('password')->type('password');

        $this->hasMany('Contact');
        $this->hasMany('LoanAgreement');
        $this->add('dynamic_model/Controller_AutoCreator');
    }
}