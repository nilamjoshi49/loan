<?php
class page_user_changepassword extends Page{
	public $title="Changepassword";
	function init(){
		parent::init();

		$user=$this->add('Model_User_User')
			->tryLoadBy('id',$this->app->auth->model->id);

		if($user['type']=='Frontuser'){
			$this->add('View_Info')->set('this user is not authorized');
		}
		else{
		$f=$this->add('Form');
		$f->addField('password','old_password');
		$f->addField('password','new_password');
		$f->addField('password','confirm_password');
		$f->addSubmit('change')->addClass('atk-swatch-green');

		if($f->isSubmitted()){
			if($f['old_password']!=$user['new_password']){
				$f->ddisplayError('old_password','paswword not match');
			}
			if(strlen($f['new_password'])>=3){
				$f->displayError('new_password','password must be greater than in 2');
			}
			if($f['new_password']!=$f['confirm_password']){
				$f->displayError('confirm_password','password not match');
			}
			$user['password']=$f['new_password'];
			$user->save();

			$f->js(null,$f->js()->univ()->successMessage('password change successfully'))->reload()->execute();


		}
			}
	}
}