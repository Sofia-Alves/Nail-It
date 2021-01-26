<?php
class Bloggeuse{

    //fonction pour creer nouveau compte de bloggeuse

    public function createBloggeuse($firstname , $lastname, $email, $password){
        global $db; 
        $newBloggeuse = $db ->prepare('
        INSERT INTO bloggeuse(firstname,lastname,email,password) VALUES (?, ?, ?, ?)');
    }

    //fonction pour verifier si mail existe deja (retourne un bool (0/1))
    public function checkMailBloggeuse($mail){
        global $db;
        $reqDatas = $db ->prepare('
        SELECT * FROM bloggeuse
        WHERE email= ?');
         
        $reqDatas ->execute(array($mail));
        $dataExists = $reqDatas ->rowCount();// renvoi un boolean
        return $dataExists;

        

    }


    
}