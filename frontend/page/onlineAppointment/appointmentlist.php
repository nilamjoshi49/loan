<?php
class page_onlineAppointment_appointmentlist extends Page{
	public $title="Details and Schedule ";
	function init(){
		parent::init();



		$v=$this->add('View')->addClass('atk-size-giga atk-swatch-green');
		$v->add('View')->set('Online Appointment Management System')->addClass('atk-swatch-green atk-box');;
		$menu=$this->add('Menu_Horizontal')->addClass('atk-col-3');
		$menu->addMenuItem('onlineAppointment_doctor','Add Doctor');
		$menu->addMenuItem('onlineAppointment_patient','Add Patient');
		$menu->addMenuItem('onlineAppointment_bankaccount','Bank Account');
		$menu->addMenuItem('onlineAppointment_schedule','Add Schedule');
		$menu->addMenuItem('onlineAppointment_appointmentlist','Doctor Appointments')->addClass('atk-push');

		

		$fm=$this->add('Form',null,'form');
		$doctor=$fm->addField('autocomplete\Basic','doctor');
		$doctor->setModel('Model_OnlineAppointment_Doctor');
       	$fm->addField('DatePicker','dateOf');
       	// $fm->addField('Patient_name')->
		$fm->addSubmit('Show Schedule')->addClass('atk-swatch-yellow');

		if($fm->isSubmitted()){               
            $fm->js()->univ()->location(
            			$this->app->url(null,
            				['doctor_id'=>$fm['doctor'],
            				'dateOf'=>$fm['dateOf']
            				]
            				))->execute();
        }

        $gd = $this->add('Grid',null,'grid');
        $gd->setModel('Model_OnlineAppointment_Schedule')
            ->addCondition('doctor_id',$_GET['doctor_id'])
            ->addCondition('day','=',$_GET['dateOf']);
        // $gd1=$gd->setModel('Model_OnlineAppointment_Patient')
        //     ->addCondition('firstname',$_GET['patient']);
        // // $gd1=$this->add('Form',null,'grid1');
        // $gd1->setModel('Model_OnlineAppointment_Patient')
        //     ->addCondition('patient',$_GET['patient_id']);
        //     // ->setOrder('adddate','ASC');    



	}
	function defaultTemplate(){
		return ['page\appointment'];
	}
}