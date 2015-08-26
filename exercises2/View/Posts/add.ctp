<h1>Add Post</h1>
<?php
echo $this->Form->create('Post', array('type'=> 'file','enctype'=>'multipart/form-data'));
echo $this->Form->input('Post.image', array('label'=>false, 'type'=>'file','multiple'));
echo $this->Form->input('author', array('type' => 'text'));
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '2'));
echo $this->Form->input('deletekey', array('type' => 'password'));
echo $this->Form->end('Save Post');

?>
