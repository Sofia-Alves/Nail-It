<?php
session_start();

//Envoi du formulaire contenant le titre et le description en text aria  et l image 


if(isset($_POST['publication']) && $_POST['publication'] == 'addPublication' ){
    if(!empty($_POST['titre']) && !empty($_POST['description']) && isset($_FILES['image']) && $_FILES['image']['error'] == 0){
        $titre = $_POST['titre'];
        $description = $_POST['description'];
        $error=1;

    if($_FILES['image']['size'] <= 3000000){ //image fait moin de 3 Mo
        $infoImage = pathinfo($_FILES['image']['name']);
        $extensionImg = $infoImage['extension'];
        $extensionsArray = array ('png','gif','jpg','jpeg'); // les extentions qu on autorise

        if(in_array($extensionImg,$extensionsArray)){

            $adress = './design/uploadImg/'.time() .'.'.$extensionImg;

            //on renome notre image avec une clé unique
            move_uploaded_file($_FILES['image']['tmp_name'], $adress);
            $img = $_FILES['image']['tmp_name'];
            $error=0;
            }
        }
            $publication = new Publication();
            $checkPublication = $publication->createPublication($titre,$description,$adress);

    }
}else{
    $alertPublication = Alert::message('veuillez remplir tout les champs','red','#fab0aa');
}

