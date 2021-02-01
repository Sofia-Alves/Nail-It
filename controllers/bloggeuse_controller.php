<?php

session_start();

include_once './classes/Bloggeuse.php'

$bloggeuse = new Bloggeuse();

$showBloggeuse = $bloggeuse -> getDatasBloggeuse($email,$firstname,$lastname,$biographie);