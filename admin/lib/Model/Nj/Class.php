<?php
class Model_Nj_Class extends SQL_Model{
	public $table="name";
	function init(){
		parent::init();

		$this->addField('class');
		$this->hasOne('Nj_College');

		$this->add('dynamic_model/Controller_AutoCreator');
		$this->addHook('beforeDelete',$this);
		$this->addHook('beforeSave',$this);
	}
	function beforeSave(){
		$m=$this->add('Model_College_Class');
		$m->addCondition('class',$this['class']);
		$m->tryLoadAny();
		if($this->loaded()){
			$this->addCondition('id','<>',$m->id);
		}else{
			if($m->loaded())
			throw new Exception("Error Processing Request", 1);
		}
	}
	function beforeDelete(){
			if($this->ref('Nj_College')->count()->getOne());
			throw new Exception("Error Processing Request", 1);	
	}
}