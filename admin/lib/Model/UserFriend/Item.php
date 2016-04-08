<?php
class Model_UserFriend_Item extends SQL_Model{
	public $table="item";
	function init(){
		parent::init();

		$this->hasOne('UserFriend_Order');

		$this->addField('name');
		$this->addField('quantity');
		$this->addField('unit_price');
		$this->addField('total');

		$this->addHook('beforeSave',$this);
		$this->addHook('afterSave',$this);
		$this->add('dynamic_model/Controller_AutoCreator');
	}


	function beforeSave(){
		$this['total']=$this['quantity']*$this['unit_price'];
		// $order['total']=$this->ref('Item')->sum()->getOne();
	}
	function afterSave(){
		$order=$this->ref('order_id');
		$order['total']=$order->ref['item']->sum('total')->getOne();
	}

	
}