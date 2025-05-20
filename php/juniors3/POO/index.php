<h1>POO</h1>

<?php
// j'ai besoin d'un four

require "four.class.php";

$coucou = new Four(100,100,100); // instance four

echo $coucou->largeur;
echo '<br>';
echo $coucou->hauteur;
echo '<br>';
echo $coucou->profondeur;
echo '<br>';

echo $coucou->afficher_volume();



echo '<hr>';

// le four de Noham
$four_de_noham = new Four(120,80,60);
echo $four_de_noham->afficher_volume();