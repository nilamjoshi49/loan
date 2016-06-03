<?php
class page_question extends Page{
    public $title="Question";
    function init(){
        parent::init();

        $questions = $this->app->stickyGET('category_id');

        $test_questions = $this->add('View_Question');
        $test_questions->setModel('Model_Quiz_Question')->addCondition($questions->id);
    }
}