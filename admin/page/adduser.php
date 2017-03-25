<?php
class page_adduser extends Page{
	public $title="admin";
	function init(){
		parent::init();

		// $this->add('CRUD')->setModel('Quiz_User');
		
		// $this->add('CRUD')->setModel('Quiz_Question');
		$c = $this->add('CRUD');
		$c->setModel('Quiz_Category');
		// $c->grid->addColumn('link','it',['descr'=>'IT','id_field'=>'category_id','page'=>'question']);
		$c->grid->addFormatter('name','link',['id_field'=>'category_id','page'=>'question']);
		// $c->js()->univ()->redirect('question');


		

	}
}