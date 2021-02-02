<?php
session_start();

include_once 'login_controller.php';

 
$publication = new Publication();

$profil= new Profil();

$showProfil = $profil -> checkMyProfil($email);

$showMyPublication = $publication-> getMyPublication($titre,$description,$img,$email);

$showAllPublications = $publication -> getAllPublications($titre,$description,$img);

// ci-dessous la gestion du bouton like 


//if (isset($_GET['like']) && $_GET['like']=='likeIt'){


    //$like= $_GET['like'];
    $_SESSION['like'] = 0;
    
    if(isset($_GET['like']) && $_GET['like']=='likeIt'){
       $like= $_SESSION['like']+1;

    }
     




