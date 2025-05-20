<?php

if(filter_input(INPUT_POST,"mail")){
    $mail = filter_input(INPUT_POST,"mail", FILTER_VALIDATE_EMAIL);
    $pays = filter_input(INPUT_POST,'pays',FILTER_VALIDATE_INT);
    $this->saveClient(new Client($mail,$pays));
}
?>


<form method="post">
<input type="email" name="mail" value="seb@seb.fr">
<select name="pays">
    <option disabled selected>Pays ?</option>
    <?php foreach($pays AS $p): ?>
    <option value="<?=$p['id']?>"><?=$p['nom']?></option>
    <?php endforeach; ?>
</select>
<input type="submit">
</form>