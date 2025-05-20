<?php

/**
 * class produits : class OBJET
 */
class Produit{

    private $_designation;
    private $_prixHT;
    private $_stock;


    public function __construct($d, $p, $s){
        $this->set_designation($d);
        $this->set_prixHT($p);
        $this->set_stock($s);
    }

    /**
     * Get the value of _designation
     */ 
    public function get_designation()
    {
        return $this->_designation;
    }

    /**
     * Set the value of _designation
     *
     * @return  self
     */ 
    public function set_designation($_designation)
    {
        $this->_designation = $_designation;

        return $this;
    }

    /**
     * Get the value of _prixHT
     */ 
    public function get_prixHT()
    {
        return $this->_prixHT;
    }

    /**
     * Set the value of _prixHT
     *
     * @return  self
     */ 
    public function set_prixHT($_prixHT)
    {
        $this->_prixHT = $_prixHT;

        return $this;
    }

    /**
     * Get the value of _stock
     */ 
    public function get_stock()
    {
        return $this->_stock;
    }

    /**
     * Set the value of _stock
     *
     * @return  self
     */ 
    public function set_stock($_stock)
    {
        $this->_stock = $_stock;

        return $this;
    }

}