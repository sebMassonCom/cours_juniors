<?php
session_start();
if(isset($_SESSION['token'])):
?>



    <h1>Accueil</h1>
    <p>Bonjour <?=$_SESSION['prenom'] ?></p>
    <a href="./deconnexion.php">Déconnexion</a>




<?php else :
    header('Location:./index.php');
endif;