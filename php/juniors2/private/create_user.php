<?php
if(filter_input(INPUT_POST, 'login')){
    $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $password_hache = password_hash($password, PASSWORD_BCRYPT);
    // echo $password_hache;

    // connexion DB
    $db = new PDO('mysql:server=localhost;dbname=juniors', 'root', '');

    $sql = $db->prepare("INSERT INTO users (login, password) VALUES (:login, :pass)");
    $sql->bindParam(':login', $login);
    $sql->bindParam(':pass', $password_hache);
    $sql->execute();

}
?>

<form method="post">
    <input type="text" name="login" autofocus="on">
    <br>
    <input type="password" name="password">
    <br>
    <input type="submit">
</form>