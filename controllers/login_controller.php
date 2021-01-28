<?php 
session_start();

// Authentication

if(isset($_POST['login']) && $_POST['login']=='done'){
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $email = $_POST['email'];
        $password = sha1($_POST['password']);
        $bloggeuse= new Bloggeuse();
        $checkBloggeuse = $bloggeuse ->checkDatasLogin($email,$password);
        $getDatasBloggeuse =$bloggeuse->getDatasBloggeuse($email);

        if($checkBloggeuse == 0){
            $alertLogin = Alert::message('email or password invalid', 'red','orange');
    
        }else{
            $sessionFirstName= $getDatasBloggeuse('firstname');
            $sessionLastName =$getDatasBloggeuse('lastname');
            $sessionPass =$getDatasBloggeuse('password');
            $_SESSION['firstname']= $sessionFirstName;
            $_SESSION['lastname']= $sessionLastName;
            $_SESSION['password']=$sessionPass;
            $_SESSION['email']=$email;
            header('Location:index.php?page=home');

        }

    }else{
        $alertLogin=Alert::message('Please insert all the missing cases','red','orange');
    }
}


?>