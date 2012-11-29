<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $form = new Application_Form_Signup();
        $this->view->form = $form;

     if ($this->getRequest()->isPost() && $this->view->form->isValid($this->_getAllParams()))
        {
                  $user = new Application_Model_User();

                    //checking for unique emailID in database
                    $email = $form->getValue('email');
                    $where = "email = '$email'";
                    $mail = $user->fetchAll($where)->toArray();

                        if(empty($mail))//if the emailId entered in Signup form is unique
                        {      
                        //  inserting data in "user" table 
                          $u_data = array(
                                'fullname'   =>    $form->getValue('fullname'),
                                'email'      =>    $form->getValue('email'),
                                'password'   =>    sha1($form->getValue('password')),
                                'zipcode'    =>    $form->getValue('zipcode'),
                                'status'	 =>	   '0'
                                         ); 

                           $user->insert($u_data);

                             //after insertion send a confirmation email to the user with an activation link
                            $smtpServer = 'smtp.gmail.com';
                            $username = 'habibsehrish@gmail.com';
                            $Password = 'h8lovestory';
                            $config = array(
                                            'ssl' => 'ssl',
                                            'auth' => 'login',
                                            'username' => $username,
                                            'password' => $Password,
                                            'port' => 465
                                            );
                            $transport = new Zend_Mail_Transport_Smtp($smtpServer, $config);
                            Zend_Mail::setDefaultTransport($transport);
                            $message = '
                                    Thank You for signing up!
                                    Your Account has been created.
                                    Please click this link to activate your account:

                                    http://comtestfront/index/activate/email/'.$u_data['email'].'/password/'.$password.'
                                    ';
                            $mail = new Zend_Mail();
                            $mail->addTo($_POST['email'], $_POST['fullname']);
                            $mail->setSubject('Congratulations!You have registered!');
                            $mail->setBodyText($message);
                            $mail->setFrom('habibsehrish@gmail.com', 'Sehrish');
                            $mail->send($transport);  
                        }        
                       else
                        {
                          echo "This Email Address is already taken.Please choose another one";//if emailID is not unique
                        }           
        }
        
    }

    public function activateAction()
    {
    	$user = new Application_Model_User();
    	$email = $this->_request->getParam('email');//getting email from url passed in the confirmation email
		$where = "email = '$email'";
		$u_email = $user->fetchAll($where)->toArray();
        
		if(!empty($u_email))//if email is present
			{
					//update the staus of the user from 0 to 1(user activated)
					$where = "email = '$email'";
					$data = array('status' => '1');
					$user->update($data, $where);	
			}
		else
			{
			  echo "invalid operation.";
			}
    }
  
}
