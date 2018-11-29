<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class LoginController extends AppController
{
    
    public function index(){
        if($this->request->is('post')){
            $session = $this->request->session();
            $users_table = TableRegistry::get('users')
            ->find()
            ->select()
            ->where(['Email =' => $this->request->data('email'), 'password =' => base64_encode($this->request->data('password')) ]);

            foreach($users_table as $userData){
              $session->write('UserId', $userData->Id);
              $session->write('FirstName', $userData->FirstName);
              $session->write('LastName', $userData->LastName);
              $session->write('Email', $userData->Email);
              $session->write('Mobile', $userData->Mobile);
              $session->write('City', $userData->City);
              $this->Flash->success('Hello '.$userData->FirstName." ".$userData->FirstName." Welcome Back!");    
              return $this->redirect(array('controller'=>'Dashboard', 'action' => 'index'));
            }
            $this->Flash->error("Invalid Credentials");
              
        }
    }


    
}