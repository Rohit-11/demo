<?php 
$paginator = $this->Paginator;
?>
<div style="display:inline-block; width: 100%;">

<div style="float: left;"><h2>View All Post </h2></div>


</div>
<table>
    <tr>
        <th><?php echo $this->Paginator->sort('id'); ?></th>
        <th>Title</th>
        <th>Body</t>
        <th><?php echo $this->Paginator->sort('category','Category'); ?></th>
        <?php if($isLoggedIn){ ?>
        <th>actions</th>
        <?php } ?>

    </tr>
    <?php foreach($posts as $post){?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td><?php echo $this->HTML->link($post['Post']['title'],
        array('action' => 'view' , $post['Post']['id'])) ;; ?></td>
        <td><?php echo $post['Post']['body']; ?></td>
        <td><?php echo $post['Post']['category']; ?></td>
        <?php if($isLoggedIn){ ?>
        <td> <?php echo $this->HTML->link('Edit',
                        array('action' => 'edit' , $post['Post']['id'])) ;; ?>
             <?php echo $this->HTML->link('Delete',
                        array('action' => 'delete' , $post['Post']['id']), NULL , 'Are you sure want to delete this post?') ;; ?>
         </td>
    </tr>
 
    <?php }} ?>

</table>

<div class='paging'>
        <?php 
        echo $paginator->first('First'); 
        if($paginator->hasPrev()){
            echo $paginator->prev('Previous');
        }
        echo $paginator->numbers(array('moulus' => 2));
        if($paginator->hasNext()){
            echo $paginator->next('Next');
        }
        echo $paginator->last('Last');
        ?>
</div>
<br>
<p>
<?php if($isLoggedIn){?>
<?php echo $this->HTML->link('Add Post',array('action' => 'add')) ;;} ?>
</p>