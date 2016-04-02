<?php

class Model_Repayment extends SQL_Model {
    public $table='agreement';

    function init() {
        parent::init();

        $this->hasOne('LoanAgreement');

		$this->addField('ammount')->type('int');
		$this->addField('date')->type('datetime');



        $this->add('dynamic_model/Controller_AutoCreator');
    }
}