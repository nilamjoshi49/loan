<?php
class page_attendance extends Page
{
	public $title="Attendance";
	function init()
	{
		parent::init();
		// $stud_id = $this->app->stickyGET('student_id');
		$fm = $this->add('Form',null,'form');
		
		$studentdetails = $fm->addField('DropDown','student');
		$studentdetails->setEmptyText('please select a student');
		$studentdetails->setModel('Model_StudentAttendance_StudentDetails');
       	$fm->addField('DatePicker','from_date');
		$fm->addField('DatePicker','to_date');
		$fm->addSubmit('Show');

        if($fm->isSubmitted()){               
            $fm->js()->univ()->location(
            			$this->app->url(null,
            				['student_id'=>$fm['student'],
            				'from_date'=>$fm['from_date'],
            				'to_date'=>$fm['to_date']
            				]
            				))->execute();
        }

        $gd = $this->add('Grid',null,'grid');
        $gd->setModel('Model_StudentAttendance_Student')
            ->addCondition('studentdetails_id',$_GET['student_id'])
            ->addCondition('adddate','>=',$_GET['from_date'])
            ->addCondition('adddate','<=',$_GET['to_date']);
    
        
    }



	
	function defaultTemplate(){
		return['page\attendance'];
	}
}