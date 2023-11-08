<?php

require_once('blog/src/lib/database.php');
require_once('blog/src/model/comment.php');
require_once('blog/src/model/post.php');

function post(string $identifier)
{
    $connection = new DatabaseConnection();

    $postRepository = new PostRepository();
    $postRepository->connection = $connection;
    $post = $postRepository->getPost($identifier);
    
    $commentRepository = new CommentRepository();
    $commentRepository->connection = $connection;
    $comments = $commentRepository->getComments($identifier);

    require('blog/templates/post.php');
}
