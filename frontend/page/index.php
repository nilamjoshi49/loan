<?php
class page_index extends Page{
    
    function init(){
        parent::init();
        // throw new \Exception("Error Processing Request", 1);
        

        $form = $this->add('Form',null,'form');
        
        $course_field = $form->addField('dropdown','course');
        $course_field->setEmptyText('Please Select A Value');
        $course_field->setModel('Timetable_Course');

        $year_field = $form->addField('dropdown','year');
        $year_field->setEmptyText('Please select year');
        $year_field->setModel('Timetable_Year');
                                                                                                                     
        $form->addSubmit('Show');
        
        if($_GET['course_id']){
            $year_field->getModel()->addCondition('course_id',$_GET['course_id']);
        }
        
        $course_field->js('change',$year_field->js()->reload(null,null,[$this->app->url(null,['cut_object'=>$year_field->name]),'course_id'=>$course_field->js()->val()]));
       
        if($_GET['year_id']){
             $grid = $this->add('Grid',null,'grid');
             $grid->setModel('Timetable_Timetables')
                  ->addCondition('course_id',$_GET['course_id'])
                  ->addCondition('year_id',$_GET['year_id']);
        }

        if($form->isSubmitted()){               
           // throw new \Exception($form['course']."---".$form['year']);
            $form->js()->univ()->location($this->app->url(null,['course_id'=>$form['course'],'year_id'=>$form['year']]))->execute();
        } 
    }

    function defaultTemplate(){
        return['page\timetable'];
    }
}