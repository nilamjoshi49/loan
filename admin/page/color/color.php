<?php
class page_color_color extends Page{
	public $title="Color";

	function init(){
		parent::init();

		$this->add('CRUD')->setModel('Color_Color');
		$this->add('CRUD')->setModel('Color_Name');
		
	}
}