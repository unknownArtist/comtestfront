<?php

class UserController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $form = new Application_Form_Signup();

         if ($this->getRequest()->isPost()) 
            {
            
            $formData = $this->getRequest()->getPost();

            if ($form->isValid($formData)) 
                {
                	echo $_POST['fullname'];
                	echo $_POST['email'];
                	echo $_POST['password'];
                	echo $_POST['zipcode'];
                }
            }
    }


}

