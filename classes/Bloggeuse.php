<?php
class Bloggeuse{

    //fonction pour creer nouveau compte de bloggeuse

    public function createBloggeuse($firstname , $lastname, $email, $password){
        global $db; 
        $newBloggeuse = $db ->prepare('
        INSERT INTO bloggeuse(firstname,lastname,email,password) VALUES (?, ?, ?, ?)');
    }

    //fonction pour verifier si mail existe deja (retourne un bool (0/1))
    public function verifyMailAvalable($mail){
        global $db;
        $reqDatas = $db ->prepare('
        SELECT * FROM bloggeuse
        WHERE email= ?');
         
        $reqDatas ->execute(array($mail));
        $dataExists = $reqDatas ->rowCount();// renvoi un boolean
        return $dataExists;

        

    }
    // fonction pour verifier les info lors du login du tableau bloggeuse BDD

    public function checkDatasLogin($email,$pass){
        global $db;
        $reqDatas = $db ->prepare('
        SELECT * FROM bloggeuse
        WHERE email= ?
        AND password= ?
        ');
        echo '$email'.$email;
        echo '$pass'.$pass;
        $reqDatas->execute(array($email,$pass));
        $dataExists = $reqDatas->rowCount();
        echo '$dataExists'.$dataExists;
        return $dataExists;
    }

   // fonction pour recuperer les info du tableau bloggeuse en BDD


   public function getDatasBloggeuse($email){
       global $db;
       $bloggeuse = $db -> prepare('
       SELECT * FROM blogeuse WHERE email = ?');
       $bloggeuse ->execute(array($email));
       $req = $bloggeuse -> fetch(PDO::FETCH_ASSOC);
       return $req ;
   }
    
}