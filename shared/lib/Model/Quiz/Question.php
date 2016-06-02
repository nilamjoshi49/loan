<?php
class Model_Quiz_Question extends SQL_Model{
	public $table="question";
	function init(){
		parent::init();

		// $this->hasOne('Category','category_id');
		$this->addField('question');
		$this->addField('a');
		$this->addField('b');
		$this->addField('c');
		$this->addField('d');
		$c=$this->addField('correct_ans');
		// $id=$this->ref(('category_id'));
		// if($id['correct_ans'] == $id->ref['ans'])
		


		$this->add('dynamic_model/Controller_AutoCreator');
	}
}