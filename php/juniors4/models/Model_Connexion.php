<?php

require_once 'core/Database.class.php';

class Model_Connexion{

    private $_cle;


    public function __construct(){
        $this->_cle = new Database(); // self::$db est dispo ....
    }

    public function autorisation($login, $password){
        $user = Database::$db->query("SELECT * FROM users WHERE login='$login' LIMIT 1");
        $user->execute();
        
        foreach($user AS $u){
            if(password_verify($password, $u['password'])){
                // echo 'ok';
                $_SESSION['user'] = $u['login'];
                $_SESSION['level'] = $u['level'];
                header('Location:/views/accueil.php');
            } else {
                // echo 'pb';
                $_SESSION['message'] = "Erreur de connexion";
                header('Location:/views/login.php');
            }

        }
    }

}