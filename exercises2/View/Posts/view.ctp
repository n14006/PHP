<h1><?php echo h($post['Post']['title']); ?></h1>
<h1><?php echo h($post['Post']['author']); ?></h1>

<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

<p><?php echo h($post['Post']['body']); ?></p>

<img src="../../app/webroot/img/<?php echo $post['Post']['img']; ?>">


<h2>Comments</h2>
<ul>
<?php foreach ($post['Comment'] as $comment): ?>
<li>
<?php echo h($comment['body']) ?> by <?php echo h($comment['commenter']); ?>
//<?php
//echo $this->Form->postlink(
//  array('action' => 'delete' ,$comment['id']),  array('confirm' => 'Are you sure?'));
//?>
</li>
<?php endforeach; ?>
</ul>

<h2>Add Comment</h2>

<?php
echo $this->Form->create('Comment', array('action'=>'add'));
echo $this->Form->input('commenter');
echo $this->Form->input('body', array('rows'=>3));
echo $this->Form->input('Comment.post_id', array('type'=>'hidden', 'value'=>$post['Post']['id']));
echo $this->Form->end('post comment');
?>

<?php
echo $this->Form->create('Post', array('action'=>'delete'));
echo $this->Form->input('password', array('type' => 'password'));
echo $this->Form->input('dpass', array('type'=> 'hidden','value'=>$post['Post']['deletekey']));
echo $this->Form->input('Post_id', array('type'=> 'hidden','value'=>$post['Post']['id']));
echo $this->Form->end('この記事を削除する');
?>
