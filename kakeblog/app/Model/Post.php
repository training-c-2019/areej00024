<?php
class Post extends AppModel {
	
	public $hasMany =array (
        'Comment' => array(
            'className' => 'Comment',
            'foreignKey' => 'post_id' 
        )
    );

	//----------------------------------------------------------
	
	public function isOwnedBy($post, $user) {
		return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
    }
	
	//----------------------------------------------------------
	
}
?>