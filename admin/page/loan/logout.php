<?php
class page_logout extends Page{
	public $title="LOgOut";
	function init(){
		parent::init();


		$this->addFiled('logout');

		
	}
}