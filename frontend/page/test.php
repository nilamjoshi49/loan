<?php
class page_test extends Page{
	public $title="Test";
	function init(){
		parent::init();

		// $green=$this->add('Button')->setClass('atk-swatch-green');
		// $red=$this->add('Button')->setClass('atk-swatch-red');
		// $blue=$this->add('Button')->setClass('atk-swatch-blue');

		// if($_GET['color']){
		// 	$this->add('View_Box')->addClass('atk-swatch-'.$_GET['color']);

		// }
		// $green->js('click')->univ()->location($this->api->url(null,['color'=>'blue']));
		// $red->js('click')->univ()->location($this->api->url(null,['color'=>'red']));
		// $blue->js('click')->univ()->location($this->api->url(null,['color'=>'blue']));

		////////////showing random numbers by click on button
		// $random_number=rand(1,100);
		// $button=$this->add('Button');
		// $button->set('click me'.$random_number)->addClass('atk-swatch-green');
		// $button->onClick(function($button) use ($random_number){
		// 	$button->js()->univ()->alert("random is".$random_number);
		// });
		// //
		//$button->js('click')->univ()->alert('you have clicked me!'.$random_number);
		///////////////////////////////////////////////////////////////////////
	// 	$label=$_GET['text'];
	// 	if(strlen($label)>10)
	// 	{
	// 		$this->add('P')->set('label lenth is too long');

	// 	}
	// 	$this->add('Button')->set($label);
	// }	
		//////////////////////////////////////////////////////////////////////////////

		$r=$this->add('Button')->addClass('atk-swatch-red');
		$g=$this->add('Button')->addClass('atk-swatch-green');
		$b=$this->add('Button')->addClass('atk-swatch-blue');

		if($_GET['color']){
			$this->add('View_Box')->addClass('atk-swatch-'.$_GET['color']);
		}
		
		$r->js('click')->univ()->location($this->api->url(null,['color'=>'red']));
		$g->js('click')->univ()->location($this->api->url(null,['color'=>'green']));
		$b->js('click')->univ()->location($this->api->url(null,['color'=>'blue']));







	}

// 		$this->add('MyButton',['swatch'=>'blue']);

// 	}
// }
// 		// this test page is not working

// 	class MyButton extends Button
// 	{
// 		private $swatch='green';
// 		function init(){
// 			parent::init();
// 			$this->add('atk-swatch-'.$this->swatch);



	

}
