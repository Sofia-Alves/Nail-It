
<!DOCTYPE html>
<html lang="fr">
<head>
<<<<<<< HEAD
     <?php include_once '../includes/head.php';?>
=======
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="design/styleGeneral.css?<?php echo time(); ?>" />
>>>>>>> c8570acf70e90d8625a1ad6145088976f577e5dc
    <title><?= ucFirst($page);?>Login-Page</title>
    
</head>
<body>
    <section class="content">
        <form class = "log" action="", method="POST">
            <h2>Nail-It</h2>        
            <input type="email" placeholder="Email" name="email" class="email" required/> 
            <input type="password" placeholder="Password" name="password"  class="password" required/>           
            <!--<a href="#" class="lnkforget">Forgot?</a>-->
            <button type="submit" classe="btn btn-success" name="login" value="done">Login</button>
        </form> 
        <h4 class="noAccount">Don't have an account?<br><a href="./signup"> Sign up here</a></h4>
              
    </section>
    
    <section id="carouselExampleSlidesOnly" class= "carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval = "2000">
                <img class="d-block w-100" src="./design/image/meuh_nail.jpg" >
            </div>
            <div class="carousel-item" data-interval = "2000">
                <img class="d-block w-100" src="./design/image/nail-paillette.jpg" >
            </div>
            <div class="carousel-item" data-interval = "2000">
                <img class="d-block w-100" src="./design/image/nail-freestyle.jpg">
            </div>
        </div>
    </section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
</body>
</html>

