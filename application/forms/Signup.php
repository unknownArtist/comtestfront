<?php

class Application_Form_Signup extends Zend_Form
{

    public function init()
    {
        $this->setMethod('post');
        $this->setAction('#');

        $fullname = new Zend_Form_Element_Text('fullname');
        $fullname->setRequired(TRUE);

        $email = new Zend_Form_Element_Text('email');
        $email->setRequired(TRUE);

        $password = new Zend_Form_Element_Password('password');
        $password->setRequired(TRUE);

        $zipcode = new Zend_Form_Element_Text('zipcode');
        $zipcode->setRequired(TRUE);

         $submit = new Zend_Form_Element_Submit('submit');

         $this->addElements(array(

            $fullname,
            $email,
            $password,
            $zipcode,
            $submit

            ));
    }


}

