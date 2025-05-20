<?php

class Vehicule{

    public $nom;
    public $energie;
    public $distancemax;

    public function __construct($n, $e, $d){
        $this->nom = $n;
        $this->energie = $e;
        $this->distancemax = $d;
    }

    public function afficher_informations(){
        echo $this->nom . ' ' . $this->energie . ' ' . $this->distancemax;
    }


}