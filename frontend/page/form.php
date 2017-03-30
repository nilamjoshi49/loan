<?php
class page_form extends Page
{
	public $title="Sign Up Form";
	function init()
	{
		parent::init();
			$form=$this->add('Form');
			$form->addField('name');
			$form->addField('DropDown','Gender')->setValueList(['male','Female']);
			$form->addField('DatePicker','dob');
			$form->addField('Radio','gender')->setValueList(['Female','Male']);
			$form->addField('Text');
			$form->addField('input');
			$form->addField('Checkbox','Hobbies','indoor_games');
			$form->addField('Checkbox','Hobbies','outdoor_games');

			$form->addField('email')->set('abc@test.com');
			$form->addField('city');
			$form->addField('phone');
			$form->addButton('Cancel')->js('click')->univ()->alert('Cancelled');
			$form->addSubmit('Sign UP');

			//$form->add('Form_Field_Line','search');
			$form->addField('Line');
			$upload = $form->addField('upload','File');
			$upload->setModel('filestore\File');

			$form->addField('checkboxlist','Games');
			$form->addField('checkbox','indoor');
			$form->addField('checkbox','outdoor');
			$form->addField('password','Password');
			//$form->addSubmit('Save');
			$save_and_add=$form->addSubmit('Save and add new ');
			$form->onSubmit(function($form)use ($save_and_add){
				return $form->js()->univ()->redirect($form->app->url());
			});
			// if($form->isSubmitted()){
			// 	$form->js()->univ()->save()->
			// }

			// $form->save();
			//$form->addField('timepicker','TimePicker');

			$form->add('Button')->link('test');
			$form->add('Button')->link($this->app->url('test',['id'=>123]));

			// for pass d id 
			//$form->add('P')->set['Passed id='.$_GET['id']);




			// $form->onSubmit(function($form){
			// 	return $form->js()->univ()->alert('your data is saved');
			// });

			// $form->onSubmit(function($form){
			// 	return $form->js()->univ()->location($this->api->url('test'));
			// });
			
			if($form->isSubmitted()){
				$form->js()->univ()->location($this->api->url('test'));
			}




			// 'dropdown' => 'DropDown',
   //          'checkboxlist' => 'CheckboxList',
   //          'hidden' => 'Hidden',
   //          'text' => 'Text',
   //          'line' => 'Line',
   //          'upload' => 'Upload',
   //          'radio' => 'Radio',
   //          'checkbox' => 'Checkbox',
   //          'password' => 'Password',
   //          'timepicker' => 'TimePicker',
 

			
	}
}