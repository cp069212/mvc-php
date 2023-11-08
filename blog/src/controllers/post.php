<?php

require_once('blog/src/model/post.php');
require_once('blog/src/model/comment.php');

function post(string $identifier)
{
    $postRepository = new PostRepository();
    $post = $postRepository->getPost($identifier);
    $comments = getComments($identifier);

    require('blog/templates/post.php');
}
