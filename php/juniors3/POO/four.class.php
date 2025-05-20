<?php

class Four{

    // propriétés
    public $largeur;
    public $hauteur;
    public $profondeur;
    public $puissance;
    public $programes;

    // méthodes
    public function __construct($largeur, $hauteur, $profondeur){
        $this->largeur = $largeur;
        $this->profondeur = $profondeur;
        $this->hauteur = $hauteur;
    }

    public function cuire(){
        echo 'je peux cuire des aliments';
    }

    public function griller(){
        echo 'je peux griller des aliments';
    }

    public function afficher_volume(){
        $volume = $this->largeur*$this->hauteur*$this->profondeur;
        return $volume;
    }


}