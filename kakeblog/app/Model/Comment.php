<?php

class Comment extends AppModel {
	public $belongTo = array(
	    'Post'=>array(
        'className' => 'Post'
	    ),
	);
	
	//----------------------------------------------------------
	
    public $validate = array(
        'body' => array(
        'rule' => 'notBlank'
        )
    );
	
	//----------------------------------------------------------

	public function isOwnedBy($comment, $user) {
		return $this->field('id', array('id' => $comment, 'user_Id' => $user)) !== false;
    }
	
	//----------------------------------------------------------
}
?>