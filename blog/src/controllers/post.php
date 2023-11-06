<?php

require_once('blog/src/model/comment.php');

function post(string $identifier)
{
    $post = getPost($identifier);
    $comments = getComments($identifier);

    require('blog/templates/post.php');
}
