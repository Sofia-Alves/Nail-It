<?php
class Publication{
    // methode pour inserer titre et description  dans table publication bdd


    public function insertTitreDescription($title,$descrip,$adress){
        global $db;
        $newPub = $db -> prepare('
        INSERT INTO publications (titre,description,img)VALUES(?,?,?)
        ');
    }
    // methode pour mettre à jours l image téléchargé dans le table publication
    public function updatePublication($img, $session){
        global $db;
        $putImage = $db ->prepare('
        UPDATE publication
        SET img = ?,
        FROM publication AS P ,bloggeuse AS B,
        WHERE P.id_bloggeuse = B.id ');
        $putImage ->execute(array($img,$session));
    }

    // fonction qui retourne toutes les publications 

    public function getallPublications($titre,$description,$img,$session){
        global $db;

        $allPublications =$db -> prepare('
        SELECT * 
        FROM publication AS P AND bloggeuse AS,
        WHERE B.id = P.id_bloggeuse,
        ORDER BY date DESC');
        $allPublications ->execute();
        $getDatas =$allPublications -> fetchAll(PDO::FETCH_ASSOC);
        return $getDatas;
    }

    /*public function createPublication($titre,$description,$img){
        global $db;
        $updateImg = $db->prepare('
        INSERT INTO publications(id_bloggeuse,titre,description,img)VALUES(?,?,?,?)
     ');
    }*/
    public function createPublication($titre,$description,$image){
        global $db;
        $newPub = $db ->prepare('
        INSERT INTO publication(titre, description,img) VALUES (?, ?, ?)');
        $newPub -> execute(array($titre,$description,$image));
    }

}