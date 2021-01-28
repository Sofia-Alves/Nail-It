<?php
session_start();

//Envoi du formulaire contenant le titre et le description en text aria 

if(isset($_POST['publication']) && $_POST['publication'] == 'saved'){
    if(!empty($_POST['titre']) && !empty($_POST['description'])){
        $titre = $_POST['titre'];
        $description = $_POST['description'];
        $publication = new Publication();
        $checkPublication = $publication -> insertTitreDescription($titre,$description);
    }
}else{
    $alertPublication = Alert::message('veuillez remplir tout les champs','red','#fab0aa');
}

// Recuperation de l image téléchargé dans dossier image et puis l envoyer 
// vers table publication au BDD

if (isset($_FILES['image']) && $_FILES['image']['error'] == 0){

     $error =1;

    if($_FILES['image']['size'] <= 3000000){//image fait moin de 3 Mo
        $infoImage = pathinfo($_FILES['image']['name']);
        $extensionImg = $infoImage['extension'];
        $extensionsArray = array ('png','gif','jpg','jpeg');// les extentions qu on autorise
        
        if(in_array($extensionImg,$extensionsArray)){

            $adress = '../design/uploadImg/'.time() .'.'.$extensionImg;
            
            //on renome notre image avec une clé unique
            move_uploaded_file($_FILES['image']['tmp_name'], $adress);

            $error=0;
        }
    }
}

