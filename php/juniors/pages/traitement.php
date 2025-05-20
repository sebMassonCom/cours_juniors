<?php
// connexion DB
include '../assets/inc/connexion.inc';


var_dump($_POST['film']);

// explode() => exploser / découper une chaîne de caractères à chaque fois qu'on voit un discriminant
// implode() .... fait l'inverse

// $films = $_POST['film'][0].','.$_POST ....
// $films = implode(',',$_POST['film']);
// echo $films;

foreach($_POST['film'] AS $film):

    $sql = $db->prepare("INSERT INTO likes (id_film, id_client) VALUES (:film, 17)");
    $sql->bindParam(':film', $film);
    $sql->execute();

endforeach;


// enregistrer le fichier dans la DB

// $nom = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
// $prenom = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
// // restrictions / options
// $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
// if(empty($email)){
//     echo 'pb';
// }

// $sql = $db->prepare("INSERT INTO clients (nom, prenom, email, file) VALUES (:nom, :prenom, :email, :file)");

// // bindParam est une methode qui va associer au champ de la DB et donc à l'alias, la valeur fournie par le client pour la checker
// $sql->bindParam(':nom', $nom);
// $sql->bindParam(':prenom', $prenom);
// $sql->bindParam(':email', $email);
// $sql->bindParam(':file', $filename);

// $sql->execute();