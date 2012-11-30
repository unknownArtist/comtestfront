<?php

class Application_Form_Signup extends Zend_Form
{

    public function init()
    {
        $this->setMethod('post');
        $this->setAction('#');

        $fullname = new Zend_Form_Element_Text('fullname');
        $fullname->setRequired(TRUE);
		$fullname->class='forminputsinput';
		

        $email = new Zend_Form_Element_Text('email');
		$email->class='forminputsinput';
        $email->addValidator('EmailAddress')
              ->setRequired(TRUE);
			  

        $password = new Zend_Form_Element_Password('password');
        $password->setRequired(TRUE);
		$password->class='forminputsinput';

        $zipcode = new Zend_Form_Element_Text('zipcode');

        $zipcode->setRequired(TRUE);
		$zipcode->class='forminputsinput';
$zipcode->addValidator ('regex', false, array(
                      'pattern'=>'/^\d+(\d{1,5})?(\.\d{1,2})?$/', 
                      'messages'=>array(
                       'regexInvalid'=>'required',
                       'regexNotMatch'=>'number required')
                      )
                    )
                    ->setRequired(TRUE);

         $newsletter = new Zend_Form_Element_Checkbox('newsletter');
		 $newsletter->class = "chkbox";

         $submit = new Zend_Form_Element_Submit('i');
		 $submit->class='chkboxbutton';
		 

         $this->addElements(array(

            $fullname,
            $email,
            $password,
            $zipcode,
            $newsletter,
            $submit

            ));
    }


}

