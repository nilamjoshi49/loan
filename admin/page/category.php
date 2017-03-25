<?php
class page_category extends Page{
	public $title="Category";
	function init(){
		parent::init();

		$c = $this->add('CRUD');
		$c->setModel('Quiz_Category');
		$c->grid->addFormatter('name','link',['id_field'=>'category_id','page'=>'question']);

	}
}