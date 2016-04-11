<?php 
class Model_Twitter_Admin extends Model_User{
	public $table="admin";
	function init(){
		parent::init();

		// $this->addField('name');
		// $this->addField('user');
		// $this->addField('password');
		// $this->addField('gender')->Enum(['female','male']);
		$this->addField('is_admin')->type('boolean');
		$this->addCondition('is_admin',true);
 		$this->addCondition('gender','female');



		$this->add('dynamic_model/Controller_AutoCreator');
	}
}