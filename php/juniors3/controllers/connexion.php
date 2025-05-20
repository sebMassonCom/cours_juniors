<?php
session_start();
require_once '../inc/connexion.php';

if(filter_input(INPUT_POST, 'login')){

    $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $user = $db->query("SELECT password, level, login FROM users WHERE login = '$login'");
    $user->execute();

    foreach($user AS $u){

        if(password_verify($password, $u['password'])){
            // echo 'ok';
            $_SESSION['user'] = $u['login'];
            $_SESSION['level'] = $u['level'];
            header('Location:/pages/accueil.php');
        } else {
            // echo 'pb';
            $_SESSION['message'] = "Erreur de connexion";
            header('Location:/index.php');
        }

    }

} else {
    header('Location:/index.php');
}