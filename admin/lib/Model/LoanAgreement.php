<?php
class Model_LoanAgreement extends SQL_Model{
	public $table='loanagreement';

	function init(){
		parent::init();

		$this->hasOne('User');
		$this->hasOne('Contact');

		$this->addField('type')->enum(['Single','Multiple']);
		$this->addField('amount')->type('money')->defaultValue(50);
		$this->addField('loan_date')->type('date')->defaultValue(date('y-m-d'));

		$this->addField('is_accepted')->type('boolean')->editable(false);

		$this->addExpression('repaid')->set(function($m){
			return $m->refSQL('Repayment')->sum('amount');

		});

		$this->addField('next_repayment_date')->type('date')->defaultValue(date('y-m-d'));
		$this->addField('next_repayment_amount')->type('money');
		$this->addField('next_repayment_repeats')->enum(['weekly','monthly']);
		$this->hasMany('Repayment');

		$this->add('dynamic_model/Controller_AutoCreator');
	}


	function accept(){
		$this['is_accepted']=true;
		$this->save();

	}
}