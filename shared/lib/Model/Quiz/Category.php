<?php
class Model_Quiz_Category extends SQL_Model{
	public $table="category";
	function init(){
		parent::init();

		$this->addField('name','category_id');
		// $c=$this->addField('ans');
		// $c->addFormatter('name','link',['page'=>'quiz_question']);
		



		$this->add('dynamic_model/Controller_AutoCreator');


	}
}