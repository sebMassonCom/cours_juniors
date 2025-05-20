<h1>Administration</h1>

<?php
require_once 'controllers/connexion.php';
if(filter_input(INPUT_POST, 'login')){
    $connexion = new Connexion(
        filter_input(INPUT_POST, 'login', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
        filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS)
    );
}
?>
<form method="post">
    <input type="text" name="login" autofocus="on">
    <br>
    <input type="password" name="password">
    <br>
    <input type="submit">
</form>

