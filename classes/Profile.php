<?php

class Profil{

   // validations de formulaires de création de profils

   public function createProfil($pseudo, $dateNaiss, $pays, $biographie, $avatar){
       global $db;
       $profil = $db ->prepare ('
       INSERT INTO profil(biography,avatar,birth,pays)VALUES(?,?,?,?)'
   );
    $profil -> execute(array($biographie,$avatar,$dateNaiss,$pays));
   }


   // fonction pour recuperer donnée pour le profil

   public function checkAllProfil($session){
       global $db;
       $getProfil= $db -> prepare('
       SELECT * FROM profil');
       $getProfil -> execute(array($session));
       $datas = $getProfil -> fetchAll(PDO::FETCH_ASSOC);
       return $datas;
   }

}