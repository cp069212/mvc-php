<?php
// src/controllers/post.php

require_once('blog/src/model.php');
require_once('blog/src/model/comment.php');

function post($identifier)
{
    $post = getPost($identifier);
    $comments = getComments($identifier);

    require('blog/templates/post.php');
}