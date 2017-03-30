<?php
class page_game extends Page{
	public $title="Game of guessing number";
	function init(){
		parent::init();


		$num=$this->add('Button')->addClass('atk-swatch-blue');
	}
