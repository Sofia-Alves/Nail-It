<?php
session_start();

include_once 'login_controller.php';

 
$publication = new Publication();

$profil= new Profil();

$showProfil = $profil -> checkMyProfil($email);
//var_dump($showProfil);

$showMyPublication = $publication-> getMyPublication($email);
var_dump($showMyPublication);
$showAllPublications = $publication -> getAllPublications();

// ci-dessous la gestion du bouton like 


//if (isset($_GET['like']) && $_GET['like']=='likeIt'){


    //$like= $_GET['like'];
    $_SESSION['like'] = 0;
    
    if(isset($_GET['like']) && $_GET['like']=='likeIt'){
       $like= $_SESSION['like']+1;

    }
     




