
<h1><?php echo h($post['Post']['title']); ?></h1>
<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>
<p><?php echo ($post['Post']['body']); ?></p>

<?php foreach ($post['Comment'] as $c): ?>
        <p>T<?php echo $c['body']; ?></td><br>
<?php endforeach; ?>



























<h1>Add comment </h1>
<?php
echo $this->Form->create('Comment', [
    'url' => [
        'controller' => 'Comments',
        'action' => 'add_comment'
    ]
]);
echo $this->Form->input('body');
echo $this->Form->input('post_id',array('type'=>'hidden','value'=>$post['Post']['id']));
echo $this->Form->end('save comment');
?> 




