<?php

require_once('blog/src/model/post.php');

function homepage()
{
    $postRepository = new PostRepository();
    $posts = $postRepository->getPosts();

    require('blog/templates/homepage.php');
}
