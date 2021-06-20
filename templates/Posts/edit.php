<h1>Edit Post</h1>
<?php
    echo $this->Form->create($post);
    echo $this->Form->control('category_id', ['type' => 'hidden']);
    echo $this->Form->control('title');
    echo $this->Form->control('tag_string', ['type' => 'text']);
    echo $this->Form->control('body', ['rows' => '10']);
    echo $this->Form->button(__('Update Post'));
    echo $this->Form->end();
?>
