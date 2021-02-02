<?php
session_start();

include_once 'login_controller.php';

 
$publication = new Publication();

$profil= new Profil();

$showProfil = $profil -> checkMyProfil($email);

$showAllPublications = $publication -> getallPublications($titre,$description,$img);

// ci-dessous la gestion du bouton like 

if (isset($_POST['like']) && $_POST['like']=='likeIt'){

    $like= $_POST['like'];
   
    foreach($like as $value){
    
        $value ++;
        echo 'Votre publication a été liké '.$value.' fois';
    }

}

