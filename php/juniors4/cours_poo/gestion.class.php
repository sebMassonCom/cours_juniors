<?php
require 'produits.class.php';
/**
 * class Gestion : class METIER
 */
class Gestion{

    public $produit;

    public function __construct($d,$p,$s){
        $this->produit = new Produit($d,$p,$s);
    }

    /**
     * return valorisation
     */
    public function valorisation(){
        $valorisation = $this->produit->get_prixHT() * $this->produit->get_stock();
        return $valorisation;
    }

}