<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Http\Session;
class DashboardController extends AppController
{
    public function initialize()
    {
        $session = $this->request->session();
        if(!$session->read('UserId'))
        return $this->redirect(array('controller'=>'login', 'action' => 'index'));
        $this->loadModel('Articles');
        $this->loadModel('Users');
    }
    
    public function logout()
    {
        $session = $this->request->session();
        $session->destroy();
        return $this->redirect(array('controller'=>'login', 'action' => 'index'));
    }

    public function index(){
        $usersCount = count($this->paginate($this->Users));
        $articlesCount = count($this->paginate($this->Articles));
        $this->set('usersCount',$usersCount);   
        $this->set('articlesCount',$articlesCount);   
    }

}

