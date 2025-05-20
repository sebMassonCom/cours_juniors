<?php
session_start(); 

// define('LOGIN', 'seb');
// define('PASSWORD', 'seb');

$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
// var_dump($password); 
// var_dump(password_verify($password, PASSWORD_BCRYPT));
// exit();

$db = new PDO('mysql:server=localhost;dbname=juniors', 'root', '');
$user = $db->query("SELECT * FROM users INNER JOIN clients ON clients.id = users.id LIMIT 1");

foreach($user AS $u){

    if(password_verify($password, $u['password'])){
        
// if(password_verify($password, PASSWORD_BCRYPT) == true){    
//     // connecter l'internaute et de rendre la connexion persistente (de page en page ...)
        $_SESSION['prenom'] = $u['prenom'];
        $_SESSION['token'] = uniqid();

        header('Location:accueil.php');
    } else {
        if(isset($_SESSION['tentative_connexion'])){
            $_SESSION['tentative_connexion']++;
        } else{
            $_SESSION['tentative_connexion'] = 1;
        }

        // var_dump($_SESSION['tentative_connexion']); exit();
        if($_SESSION['tentative_connexion'] > 2){
            $_SESSION['message'] = "Trop de tentatives de connexion.";
        } else {
            $_SESSION['message'] = "Nous n'avons pas pu vous identifier.";
        }
        header('Location:./index.php');
    }
}