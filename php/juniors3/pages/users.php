<?php 
include '../inc/header.php';
include '../inc/nav.php'; 
?>

<main>
<?php include '../inc/message.php'; ?>
<?php define('LEVEL', 4);
if(isset($_SESSION['user']) && $_SESSION['level'] > LEVEL):
?>

    <h2>Gestion des utilisateurs</h2>
    <p>ici je peux tout faire même tuer qqn ....</p>
   <?php 
    else :
        $_SESSION['message'] = "Vous n'avez pas les autorisations pour accéder à la page";
        // header('Location:/pages/accueil.php');
    endif;
    ?>
   

<select>
    <option value="1">Noham</value>
    <option value="2">Cochon d'inde</value>
    <option value="3">Poules</value>
    <option value="4">Utilisateurs</value>
    <option value="5">Administrateur</value>
</select>

</main>
<?php include '../inc/footer.php';