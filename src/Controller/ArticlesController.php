<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Articles Controller
 *
 * @property \App\Model\Table\ArticlesTable $Articles
 * @property \App\Model\Table\CommentsTable $Comments
 */

class ArticlesController extends AppController
{
    //initialize the elements
    public function initialize()
    {
        parent::initialize();
        $session = $this->request->session();
        if(!$session->read('UserId'))
        return $this->redirect(array('controller'=>'login', 'action' => 'index'));
        $this->loadModel('Comments');
    }
    
    //Function to view Article and comment on that Article
    public function view($id=false)
    {
        if($this->request->is('post'))
        {
            $session = $this->request->session();
            $insertComment = $this->Comments->newEntity(['articleId'=>$id,'userId'=>$session->read('UserId'),
            'comment'=>$this->request->data('comment')
            ]);
            if ($this->Comments->save($insertComment)) {
                $this->Flash->success('Comment is added');
                return $this->redirect(array('action' => 'view',$id));
            }
        }
        
        $articles = $this->articleDetail($id);
        $comments = $this->Comments->find('all', [
              'conditions' => ['Comments.articleId =' => $id],
              'contain' => ['Users'],
        ]);

        $commentsList= $comments->toArray();
        $this->set('comments',$commentsList);
        $this->set('row',$articles);   
    }

    //Make common function for articleDetail to use other place also
    public function articleDetail($id){
        $query = $this->Articles->get($id, array('contain' => array('Users')));
        $articles= $query->toArray();
        return $articles;
    }

    //Function to list all Article
    public function index(){
        $session = $this->request->session();
        $this->set('loginUserId',$session->read('UserId'));
        $query = $this->Articles->find('all', array('contain' => array('Users')));
        $articles= $query->toArray();
        $this->set('results',$articles);
    }

    //Function to create new Article
    public function create(){
        if($this->request->is('post'))
        {
            $session = $this->request->session();
            $insertArticle = $this->Articles->newEntity(['title'=>$this->request->data('title'),'authorId'=>$session->read('UserId'),
            'description'=>$this->request->data('description')
            ]);

            if ($this->Articles->save($insertArticle)) {
                $this->Flash->success('Article is Posted');
                return $this->redirect(array('action' => 'index'));
            }
        }
    }
    
    //Function to edit any Article
    public function edit($id=false){
        if(!$id)
        {
            $this->Flash->error('Select article to edit'); 
            return $this->redirect(array('action' => 'index'));
        }
        $articles = $this->articleDetail($id);
        $checkAuth = $this->checkUserArticles( $articles['users']['Id'], 'edit');
        if(!$checkAuth)
            return $this->redirect(array('action' => 'index'));
        $this->set('row',$articles);   
        if($this->request->is('post'))
        {
            $session = $this->request->session();
            $insertEntity = $this->Articles->newEntity();
            $insertArticle = $this->Articles->patchEntity($insertEntity,    ['id'=>$id, 'title'=>$this->request->data('title'),'authorId'=>$session->read('UserId'),
            'description'=>$this->request->data('description')
            ]);

            if ($this->Articles->save($insertArticle)) {
                $this->Flash->success('Article is updated');
                return $this->redirect(array('action' => 'index'));
            }
        }
    }

    //Function to delete the Article
    public function delete($id = false){
        if(!$id)
        {
            $this->Flash->error('Select article to delete'); 
            return $this->redirect(array('action' => 'index'));
        }
        $entity = $this->Articles->get($id);
        $checkAuth = $this->checkUserArticles($entity->authorId, 'delete');
        if($checkAuth){
            $result = $this->Articles->delete($entity);
            $this->Flash->error('Artices deleted');
        }
        return $this->redirect(array('action' => 'index'));
    }

    //Made common Function to check the particular login user authorize to edit/delete the article.
    public function checkUserArticles($authorId, $type, $mode = 'article'){
        $session = $this->request->session();
        if($session->read('UserId') != $authorId){
            $this->Flash->error('You are not authorized to '.$type.' this '.$mode.'. You can '.$type.' only your '.$mode.'.');
            return false; 
        }else{
            return true;
        }
    }

    public function deleteComment($id=false, $articleId=false){
        if(!$articleId)
        {
            $this->Flash->error('View article first'); 
            return $this->redirect(array('action' => 'index'));
        }
        if(!$id)
        {
            $this->Flash->error('Select comment to delete'); 
            return $this->redirect(array('action' => 'view',$articleId));
        }
        $entity = $this->Comments->get($id);
        //pr($entity); die;
        $checkAuth = $this->checkUserArticles($entity->userId, 'delete', 'comment');
        if($checkAuth){
            $result = $this->Comments->delete($entity);
            $this->Flash->success('Comments deleted');
        }
        return $this->redirect(array('action' => 'view',$articleId));
    }
    
}