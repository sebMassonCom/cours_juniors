<?php session_start(); ?>
<h1>Private</h1>

<?= isset($_SESSION['message']) ? $_SESSION['message'] : '' ?>
<?php unset($_SESSION['message']) ?>
<form action="connexion.php" method="post">
    <input type="text" name="login" autofocus="on">
    <br>
    <input type="password" name="password">
    <br>
    
    <?php 
        if(
            !isset($_SESSION['tentative_connexion'])
            ||
            $_SESSION['tentative_connexion'] < 4
        ):
    ?>
    <input type="submit">
    <?php endif; ?>

    
</form>

<a href="index.php?page=page3">Accueil</a>
<a href="index.php?page=page1">page 1</a>
<a href="index.php?page=page2">page 2</a>

<?php

    $pagee = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if(
        isset($pagee)
        &&
        file_exists('./'.$pagee.'.php')
    ){
        $page = $pagee;
    } else {
        $page = "page3";
    }
    include './'.$page.'.php';