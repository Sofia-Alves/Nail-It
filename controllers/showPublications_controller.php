<?php
session_start();

$publication = new Publication();
$bloggeuse = new Bloggeuse();

$showBloggeuse = $bloggeuse -> getDatasBloggeuse($email,$firstname,$lastname,$biographie);
$showAllPublications = $publication -> getallPublications($titre,$description,$img);
