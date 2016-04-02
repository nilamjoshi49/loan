<?php

class Model_LoanAgreement extends SQL_Model {
    public $table='loanagreement';

    function init() {
        parent::init();

        $this->hasOne('User');
        $this->hasOne('Contact');

        $this->addField('type');
        $this->addField('amount')->type('money');
        $this->addField('date')->type('date')->defaultValue('Y-m-d');
        $this->addField('next_due_date')->type('date');
        $this->addField('next_due_amount')->type('money');
        $this->addField('next_due_duration')->enum(['monthly','weekly']);
        
        $this->addField('is_approve')->type('boolean')->editable(false);

        $this->add('dynamic_model/Controller_AutoCreator');
    }

    function accept(){
        $this['is_approve']=true;
        $this->save();
    }
}