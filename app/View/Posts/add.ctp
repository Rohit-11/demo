<h2>Add Post </h2>

<?php

    echo $this->Form->create('Post');
    echo $this->Form->input('title');
    echo $this->Form->input('body');
    echo $this->Form->input('category');
    echo $this->Form->end('Create a Post');

?>