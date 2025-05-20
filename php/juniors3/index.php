<?php
// uniquement UNE fois au début du projet pour créer l'admin et UNIQUEMENT l'admin
// require_once 'inc/connexion.php';
// $pass = password_hash('seb', PASSWORD_BCRYPT);
// $db->exec("INSERT INTO users (login, password, level) VALUES ('seb','$pass',5)");


include 'inc/header.php';
?>
<main>
   <?php include 'inc/message.php'; ?>
<form action="controllers/connexion.php" method="post">
    <input type="text" name="login" value="seb">
    <input type="text" name="password" value="seb">
    <input type="submit">
</form>
</main>
<?php
include 'inc/footer.php';