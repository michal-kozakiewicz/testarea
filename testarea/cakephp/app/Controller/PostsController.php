<?php
class PostsController extends AppController {
	public $helpers = array('Html', 'Form');
	public function index() {
		$this->set('posts', $this->Post->find('all'));
	}
	public function view($id = null){
	    if(!$id) {
	        throw new NotFoundException(__('invalid post'));
	    }
	    $post = $this->Post->findById($id);
	    if(!$post){
	        throw new NotFoundException(__('invalid post'));
	    }
	    $this->set('posts', $post);
	}
}