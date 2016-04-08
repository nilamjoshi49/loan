<?php
class Frontend extends App_Frontend{
    function init()
    {
        parent::init();

        // $this->add('Layout_Centered');
    	$this->add('Layout_Centered',null,'Layout');
        // // you can also use Layout_Fluid
        $this->add('jUI');
 

        $my_location=$this->app->pathfinder->addLocation([
        	'php'=>'.'])
        ->setBasePath(dirname($this->app->pathfinder->base_location->base_path).'/shared-lib');

        $this->dbconnect();
    	//$this->add('Layout_Fluid',null,'Layout');
    	//$this->add('jQuery');


    	$this->template['page_title']='test';
    }
    function page_index($p)
    {
    	$m=$this->add('Model_LoanAgreement');
    	$m->load($this->app->stickyGET('id'));
    	$p->add('HR');
    	$p->add('H2')->set('Loan Agreement');
    	$t=$this->add('GiTemplate');
    	//$t->LoadTemplateFromString('test {var}...{/} test');
    	$t->loadTemplateFromString('I <strong> {name}Nilam{/}</strong> agree to recieve
    	 from loan <strong>{user}Minakshi{/}</strong> and reply 
    	 the loan by <strong>{date}27-sep-2016{/}</strong>.');
    	//$t['var']= "*"	;
    	//var_dump($t["var"]);
    	$p->add('HR');

  		//$p->add('H1')->set($t->render());
  		$p->add('View')	
  			->setElement('code')
  			->setHTML($t->render());


  		//$f=$p->add('Form',['js_widget'=>false]);
  		 $f=$p->add('Form');
  		// $f->addField('email');
  		// $f->addField('password');
  		// $f->addField('checkbox','Agree terms & conditions');
  		$b=$p->add('Button')->set([
  			'Agree terms for Loan',
  			//using expand the button size pura area ma aavi jase
  			'expand'=>true,
  			'swatch'=>'green',
  			'button'=>'large'
  			]);

  		$f->addSubmit();
  		// if($_POST){
  		// 	echo "Ok";
  		// 	exit;
  		// }
  		$f->onSubmit(function (){
  			return "OK";

  		});


    	//$p->add('H1')->set('Nilam');
    	//$p->js('click')->hide('slow');
    	//$p->js('click')->bounce();
    }
    // function defaultTemplate(){
    // 	return ['main'];
    // }
}


// class Frontend extends App_Web{
// 	function init(){
// 		parent::init();

// 		$this->add('HelloWorld');
// 	}
// }

