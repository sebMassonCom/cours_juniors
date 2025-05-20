<style type="text/css">
    form{
        width: 20%;
        margin: 10vh auto;
        border: 1px solid black;
        padding: 2%;
    }
    input, label{
        display: block;
        width: 100%;
        margin: 1em 0 0;
        line-height: 2em;
    }
    label{
        display: flex;
        justify-content:left;
        text-align:left;
    }
    label > input{
        width: 20%;
    }
    [type="file"]{display: none;}
</style>
<form action="pages/traitement.php" method="post" enctype="multipart/form-data">

    <input type="text" name="lastname" placeholder="nom" value="masson">
    <input type="text" name="firstname" placeholder="prénom" value="seb">
    <input type="email" name="email" placeholder="email" value="seb@seb.fr">
    <input type="email" name="confemail" placeholder="confirmation email" value="seb@seb.fr">
    
    <p>choisir 3 films dans une liste</p>
    <?php
    include 'assets/inc/connexion.inc';
    $films = $db->query("SELECT * FROM films");
    foreach($films AS $film): 
    ?>

    <label for="film<?=$film['id']?>">
        <input type="checkbox" name="film[]" id="film<?=$film['id']?>" value="<?=$film['id']?>">
        <?=$film['nom']?>
    </label>

    <?php endforeach; ?>

    <label for="pdp">photo de profil</label>
    <input type="file" name="pdp" id="pdp">

    <input type="submit">

</form>