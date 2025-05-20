<?php
// la fonction va exécuter tout ce bloc de code
// elle a besoin d'une seule chose pour fonctionner : le fichier à traiter et déplacer
function checkfichier($x){

    $name       = $x['name'];
    $type       = $x['type'];
    $extension  = '.'.explode('/',$type)[1];
    $tmp_name   = $x['tmp_name'];
    $error      = $x['error'];
    $size       = $x['size'];
    
    $fichiers_autorises = array('image/jpeg', 'image/png', 'image/gif');
    
    if($error != 0){
        echo 'il y a eu une erreur';
    }
    
    if(!in_array($type, $fichiers_autorises)){
        echo '<p>C\'est pas une image !!!! </p>';
    }
    
    $current_month = date("Y-m",time()); // 2025-05
    $dir = '../fichiers_clients/'.$current_month;
    
    // si le dossier $dir n'existe pas !
    if(!is_dir($dir)){
        mkdir($dir);
    }
    
    // renommer le fichier pour éviter les soucis
    $nom_fichier = $current_month."/client-".uniqid().$extension;
    // echo $nom_fichier;
    $destination = '../fichiers_clients/'.$nom_fichier;
    
    // stocker le fichier sur le serveur => le faire passer du dossier temporaire vers le dossier de notre choix ...
    move_uploaded_file($tmp_name, $destination);

    // quand tout est fait, la fonction renvoie le nom que l'on a reformaté pour pouvoir le réutiliser
    return $nom_fichier;

}