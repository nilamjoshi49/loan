<?php
class View_Question extends View
{
	function init()
	{
		parent::init();
		
		
		$f = $this->add('Form');
		$q = $this->add('Model_Quiz_Question');
			foreach ($q as $question) 
			{
				$question['question'];
			}
		
		
	}
	function defaultTemplate()
	{
		return ['page/question'];
	}
}



