<?php

require_once('blog/src/lib/database.php');
require_once('blog/src/model/post.php');

function homepage()
{
    $postRepository = new PostRepository();
    $postRepository->connection = new DatabaseConnection();
    $posts = $postRepository->getPosts();

    require('blog/templates/homepage.php');
}

