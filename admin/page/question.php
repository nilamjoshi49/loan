<?php
class page_question extends Page{
	public $title="question";
	function init(){
		parent::init();

		$this->add('CRUD')->setModel('Quiz_Question');
		// $c->grid->addFormatter('name','link',['id_field'=>'category_id','page'=>'question']);

	}
}