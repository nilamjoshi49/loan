<?php
class Model_Color_Name extends SQL_Model{
	public $table="name";
	function init(){
		parent::init();

		$this->addField('products');
		$this->hasMany('Color_Color');

		$this->add('dynamic_model/Controller_AutoCreator');
		$this->addHook('beforeDelete',$this);
		$this->addHook('beforeSave',$this);
	}

	function beforeSave(){
		$m=$this->add('Model_Color_Name');
		$m->addCondition('products',$this['products']);
		$m->tryLoadAny();
		if($this->loaded()){
			$this->addCondition('id','<>',$m->id);
		}else{
			if($m->loaded())
				throw new Exception("Error Processing Request", 1);		
		}
	}

	function beforeDelete(){
		if($this->ref('Color_Color')->count()->getOne())
			throw new Exception("Error Processing Request", 1);
	}
}