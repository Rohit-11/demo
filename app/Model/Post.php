<?php
class Post extends AppModel {
    var $validate = array(
        'title' => array(
            'title_must_not_be_blank'=>array(
                'rule' => 'notBlank',
                'message'=> 'This post is missing a title!'
            ),
            'title_must_be_unique'=>array(
                'rule' => 'isUnique',
                'message'=> 'A post with a title already exist!'
            ),
        ),
        'body' => array(
            'body_must_not_be_blank'=>array(
                'rule' => 'notBlank',
                'message'=> 'This post is missing a body!'
            ),

        ),
        'category' => array(
            'category_must_not_be_blank'=>array(
                'rule' => 'notBlank',
                'message'=> 'This post is missing a category!'
            ),

        )
    );
}
?>