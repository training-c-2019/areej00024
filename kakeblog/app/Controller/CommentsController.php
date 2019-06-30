<?php

class CommentsController extends AppController {
	
    public $helpers = array('Html', 'Form');
    public $components =array ('Flash','RequestHandler');

	//----------------------------------------------------------

	public function index(){
         $this -> set ('Coments', $this ->Comment->find('all'));
    }

	//----------------------------------------------------------
 
    public function add_comment() {
	   if ($this->request->isPost()) {
	        $D=  $this->request->data['Comment']['post_id'];
			$this->request->data['Comment']['user_Id'] = $this->Auth->user('id');
            if ($this->Comment->save($this->request->data)) {
                $this->Flash->success(__('Your comment has been saved.'));
                return $this->redirect(array('controller' => 'Posts','action' => 'view',$D));
            }
			else{
			$this->Flash->error(__('Unable to comment your post.'));
			}
        }
	}
	
	//----------------------------------------------------------

}
?>