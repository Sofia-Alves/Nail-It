<?php
    session_start();
    if(!isset($_SESSION['login']) !== true){
        header("location: ./login_view.php ");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php  include_once("../includes/header.php") ?>
<body>
    
</body>
<?php include_once("../includes/footer.php") ?>
</html>