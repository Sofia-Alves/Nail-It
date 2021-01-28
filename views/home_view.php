<?php
    session_start();
    if(!isset($_SESSION['login']) !== true){
        header("location: ./login_view.php ");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../design/styleGeneral.css">
    <title>Document</title>
</head>
    <?php  include_once("../includes/header.php") ?>
<body>
    <?php include ("./showPublications_view.php") ?>
    <?php include_once("../includes/footer.php") ?>
</body>    
</html>