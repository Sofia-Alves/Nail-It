<?php
session_start();

if(isset($_POST['profil']) && $_POST['profil']=='enregistrer'){
    if(!empty($_POST['pseudo']) && !empty($_POST['biographie']) && !empty($_POST['dateNaissance']) && !empty($_POST['pays']) && !empty($_POST['avatar'])){
        $pseudo = $_POST['pseudo'];
        $biographie = $_POST['biographie'];
        $dateNaiss = $_POST['dateNaissance'];
        $avatar = $_POST['avatar'];
        $pays = $_POST['pays'];

    }
}