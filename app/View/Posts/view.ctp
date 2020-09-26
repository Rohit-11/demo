<h2> <?php echo $post['Post']['title']; ?> </h2>

<p> <?php echo $post['Post']['body']; ?> </p>

<p><small>Created on:  <?php echo $post['Post']['created']; ?> </small> </p>

<br>

<p> <?php echo $this->html->link('Back' , array('action' => 'index')) ?> 
<?php if($isLoggedIn){ 
  echo $this->HTML->link('Edit',
                        array('action' => 'edit' , $post['Post']['id'])) ;; 
          
 echo $this->HTML->link('Delete',
                        array('action' => 'delete' , $post['Post']['id']), NULL , 'Are you sure want to delete this post?') ;;
 
 }?>
 </p>