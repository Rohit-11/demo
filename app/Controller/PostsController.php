<?php
App::uses('AppController', 'Controller');

class PostsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        //$this->set('posts', $this->Post->find('all',array('order' => 'Post.created DESC')));
        $this->paginate = array(
            'limit' => 3,
            'order' => 'Post.created DESC'
        );
        $posts = $this->paginate('Post');
 
        $this->set('posts', $posts);
    }

    public function view($id = NULL) {
        $this->set('post', $this->Post->read(NULL , $id));
    }

    public function add() {
        if(!empty($this->data)){
            if($this->Post->save($this->data)){
                $this->Session->setFlash('The post saved successfully');
                $this->redirect(array('action' => 'index'));
            }else{
                $this->Session->setFlash('The post not save!');
            }
        }
        
    }

    public function edit($id = NULL){
        if(empty($this->data)){
            $this->data = $this->Post->read(NULL,$id);
        }else{
            if($this->Post->save($this->data)){
                $this->Session->setFlash('The post updated successfully');
                $this->redirect(array('action' => 'view' , $id));
            }else{
                $this->Session->setFlash('The post not updated!');
            }
        }
    }

    public function delete($id = NULL){
        $this->Post->delete($id);
        $this->Session->setFlash('The post deleted successfully');
        $this->redirect(array('action' => 'index'));
    }
    
}
?>