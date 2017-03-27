<?php
class Model_Student_Studyear extends SQL_Model{
	public $table="studyear";
	function init(){
		parent::init();

		$this->addField('year');


		$this->add('dynamic_model/Controller_AutoCreator');
	}
}