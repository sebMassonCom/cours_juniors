<?php
require_once 'core/Database.php';
new Database;

class ModelAjoutClient{


    public function ajout($mail,$pays){

        $sql = Database::$db->prepare("INSERT INTO clients (email, pays) VALUES (:email, :pays)");
        $sql->bindParam(':email', $mail);
        $sql->bindParam(':pays', $pays);
        $sql->execute();
        
    }



}