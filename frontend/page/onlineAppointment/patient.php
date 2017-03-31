<?php
class page_onlineAppointment_patient extends Page{
	public $title="Patient Details";
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


		$this->add('CRUD')->setModel('Model_OnlineAppointment_Patient');
		
	}
}