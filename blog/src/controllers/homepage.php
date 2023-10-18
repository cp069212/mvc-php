<?php
// src/controllers/homepage.php

require_once('blog/src/model.php');


function homepage() 
{
    $posts = getPosts();

    require('blog/templates/homepage.php');
}