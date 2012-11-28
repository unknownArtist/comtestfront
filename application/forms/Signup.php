<?php

class Application_Form_Signup extends Zend_Form
{

    public function init()
    {
        $this->setMethod('post');
        $this->setAction('');

        $fullname = new Zend_Form_Element_Text('fullname');
        $fullname->setLabel('Full Name')
             	  ->setRequired(TRUE);

        $email = new Zend_Form_Element_Text('email');
        $email->setLabel('Full Name')
             	  ->setRequired(TRUE);

        $password = new Zend_Form_Element_Password('password');
        $password->setLabel('Password')
             	 ->setRequired(TRUE);

        $zipcode = new Zend_Form_Element_Text('zipcode');
        $zipcode->setLabel('Zip code')
             	  ->setRequired(TRUE);
    }


}

