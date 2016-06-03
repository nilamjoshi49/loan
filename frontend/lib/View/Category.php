<?php
class View_Category extends View{
	function init()
	{
		parent::init();

		$q = $this->add('Form');
		$catg = $this->add('Model_Quiz_Category');
		$catg->tryLoadAny($this->api->stickyGET('category_id'));
		$cat = $q->addField('Dropdown','SubjectName');
		$cat->setModel($catg,['name']);

		$q->addSubmit('StartTest');

		if($q->isSubmitted())
		{
			$q->js(null,$q->js()->univ()->successMessage('your test is started'))->reload()->execute();
			// $q->grid->addFormatter('StartTest','link',['id_field'=>'question_id','page'=>'question']);		
			// $q->grid->addColumn('link','StartTest',['descr'=>'StartTest','id_field'=>'question_id','page'=>'question'])		
		}
		// $c->grid->addColumn('link','it',['descr'=>'IT','id_field'=>'category_id','page'=>'question']);

		// function setModel($m){
		// 	parent::setModel($m);
				// $q->addField('cat');
				// return $this->model();
			// }
	}	
	function defaultTemplate(){
		return ['page/category'];
	}
}



