<h2>Edit Post </h2>

<?php

    echo $this->Form->create('Post');
    echo $this->Form->input('title');
    echo $this->Form->input('body');
    echo $this->Form->input('category');
    echo $this->Form->hidden('id');
    echo $this->Form->end('Edit a Post');

?>