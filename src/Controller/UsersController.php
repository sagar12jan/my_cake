<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */

class UsersController extends AppController
{
    //initialize the elements
    public function initialize()
    {
        $session = $this->request->session();
        if(!$session->read('UserId'))
        return $this->redirect(array('controller'=>'login', 'action' => 'index'));
        parent::initialize();
        
    }
    //Function to view detail of the User
    public function view($id=false)
    {
        //WITH ENTITY
        $users = $this->Users->get($id);
       //WITHOUT ENTITY
        // $users_table = TableRegistry::get('users')->find();
        // $users = $users_table->where(['id'=>$id])->first();
        // $users = TableRegistry::get('users');
        //  $query = $users->findById($id);
        $this->set('row',$users);
    }
    //Function to list all the user
    public function index(){
        //WITH ENTITY
        // $users = $this->paginate($this->Users);
        // echo "<pre>";
        // print_r($users);die;
        //WITHOUT ENTITY
        $users = TableRegistry::get('users');
        $query = $users->find();
        $this->set('results',$query);
    }
    //Function to create new Users
    public function create(){
        
        if($this->request->is('post')){
            $users = TableRegistry::get('users');
            $userdata = $users->newEntity();        
            $userdata->FirstName = $this->request->data('fname');
            $userdata->LastName = $this->request->data('lname');
            $userdata->Email = $this->request->data('email');
            $userdata->Mobile = $this->request->data('mobile');
            $userdata->City = $this->request->data('city');
            if ($users->save($userdata)) {
                $this->Flash->success('User is now added');
                return $this->redirect(array('action' => 'index'));
            }
        }
    }
    //Function to update detail of the user through TableRegistry
    public function edit($id){
        if($this->request->is('post')){
           
            $users_table = TableRegistry::get('users');
            $userdata = $users_table->get($id);
            $userdata->FirstName = $this->request->data('fname');
            $userdata->LastName = $this->request->data('lname');
            $userdata->Email = $this->request->data('email');
            $userdata->Mobile = $this->request->data('mobile');
            $userdata->City = $this->request->data('city');
            
           if($users_table->save($userdata))
                $this->Flash->success('User detail is updated');
                return $this->redirect(array('action' => 'index'));
        } else {
           $users_table = TableRegistry::get('users')->find();
           $users = $users_table->where(['id'=>$id])->first();
           $this->set('row',$users);
        }
     }
        //Function to delete the user through TableRegistry
        public function delete($id= false){
            $users_table = TableRegistry::get('users');
            if(!$id){
                $this->Flash->error('Select Users First');
            }else{
                $users = $users_table->exists(['Id'=>$id]);
                if(!$users){
                    $this->Flash->error('This user is not available in our system');
                }else{
                    $users = $users_table->get($id);
                    $users_table->delete($users);
                    $this->Flash->error('User is now deleted');
                }
            }
            return $this->redirect(array('action' => 'index'));
        }
}