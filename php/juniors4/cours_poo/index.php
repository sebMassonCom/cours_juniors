<h1>Gestion des stocks</h1>

<?php

    include 'gestion.class.php';
    $gestion = new Gestion("poire",10,156);

?>

<p>A date, la valorisation de mon stock de <?= $gestion->produit->get_designation(); ?> est de : <?= $gestion->valorisation() ?></p>


<?php

    include 'vehicule.class.php';
    $vehicule = new Vehicule("voiture",'diesel',856);

    $vehicule->afficher_informations();

?>

<hr>


<?php

    include 'avion.class.php';
    $avion = new Avion("A320",'kerosen', 1856, 2);

    $avion->afficher_informations();

?>