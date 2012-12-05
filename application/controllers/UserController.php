<?php

class UserController extends Zend_Controller_Action
{
       

    public function init()
    {
        /* Initialize action controller here */
      
    }

    public function indexAction()
    {
   
        $form = new Application_Form_Login();
        $this->view->lgnform = $form;

         $authAdapter = $this->getAuthAdapter();

         if ($this->getRequest()->isPost()) 
            {
              $formData = $this->getRequest()->getPost();

            if ($form->isValid($formData)) 
                {
                
                    $email    = $form->getValue('email');
                    $password = sha1($form->getValue('password'));
                    
                         $authAdapter->setIdentity($email)
                                     ->setCredential($password);
                
                    $auth = Zend_Auth::getInstance();
                    $result = $auth->authenticate($authAdapter);
                 
                    if($result->isValid())
                        {
                            
                            $userStatus = new Application_Model_User();

                            $emailcheck = strstr($email, '@', true);
                            if($emailcheck!=null)
                            {
                                $where = "email = '$email'";
                            }

                            $data = $userStatus->fetchRow($where)->toArray();
                            
                            if($data['status'] == 1)
                            {
                                $userData = new Zend_Session_Namespace('Default');
                                $userData->id = $data['id'];
                                $userData->email = $data['email'];
                                
                                $this->_redirect('index');
                            }
                            else
                            {
                                $form->populate($formData);
                                $this->view->SignUpError = "your account is not activated";
                            }
                        }
                    else
                        {
                            $form->populate($formData);
                            $this->view->SignUpError = "Invalid Username or Password";
                        }
                 } 
            else            
                {
                    $form->populate($formData);
                }
              // $this->_redirect('index');
        }   
    }

    private function getAuthAdapter()
    {
        $auth = new Zend_Auth_Adapter_DbTable(Zend_Db_Table::getDefaultAdapter());
     
        if(isset($_POST['email']))
        {
            $user = strstr($_POST['email'], '@', true); // As of PHP 5.3.0
            
            if ($user!= NULL)
            {
                $auth->setTableName('user')
                ->setIdentityColumn('email')
                ->setCredentialColumn('password'); 
                return $auth; 
            } 
        }
    }

    public function logoutAction()
    {
        Zend_Auth::getInstance()->clearIdentity();
        //$this->_redirect('login');
    }

//public function facebookAction() {
// require 'facebook-platform/src/facebook.php';

// $facebook = new Facebook(array(
//   'appId'  => '420544178018982',
//   'secret' => '6e9e7f7529fab17ac8373a45b9b7865d',
// ));

// // Get User ID
// $user = $facebook->getUser();
// $this->view->user = $user;
// if ($user) {
//   try {
//     // Proceed knowing you have a logged in user who's authenticated.
//     $user_profile = $facebook->api('/me');
//   } catch (FacebookApiException $e) {
//     error_log($e);
//     $user = null;
//   }
// }

// if ($user) {
//   $logoutUrl = $facebook->getLogoutUrl();
// } else {
//   $loginUrl = $facebook->getLoginUrl();
// }
//}
}

