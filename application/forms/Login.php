<?php

class Application_Form_Login extends Zend_Form
{

    public function init()
    {
        $this->setMethod('post');
        $this->setAction('');

        $loginname = new Zend_Form_Element_Text('email');
        $loginname->setRequired(TRUE);
		$loginname->class='forminputsinput';

       $password = new Zend_Form_Element_Password('password');
       $password->setRequired(TRUE);
	   $password->class='forminputsinput';
             
        $submitlogin = new Zend_Form_Element_Submit('login');
		$submitlogin->class='loginbutton';

        $this->addElements(array(

            $loginname,
            $password,
            $submitlogin,

            ));
    }


}
