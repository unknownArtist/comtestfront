<?php

class Application_Form_Login extends Zend_Form
{

    public function init()
    {
        $this->setMethod('post');
        $this->setAction('');

        $loginname = new Zend_Form_Element_Text('email');
        $loginname->setLabel('Enter your Email')
             ->setRequired(TRUE);

       $password = new Zend_Form_Element_Password('password');
       $password->setLabel('Password')
             ->setRequired(TRUE);
             
        $submitlogin = new Zend_Form_Element_Submit('login');

        $this->addElements(array(

            $loginname,
            $password,
            $submitlogin,

            ));
    }


}
