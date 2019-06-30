
<?php

debug($Coments);

<p><?php echo $this->Html->link('Add comment', array('controller' => 'Comments','action' => 'add_comment',$post['Post']['id'])); ?></p>

?>