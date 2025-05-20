<?php
require_once 'Vehicule.class.php';

class Avion extends Vehicule{

    public $ailes;

    public function __construct($n, $e, $d, $nbailes){
        parent::__construct($n, $e, $d);
        $this->ailes = $nbailes;
    }

    public function afficher_informations(){
        echo $this->nom . ' ' . $this->energie . ' ' . $this->distancemax . ' ' . $this->ailes;
    }

}