<?php

class Client{

    private $_mail;
    private $_pays;


    public function __construct($mail, $pays){
        $this->set_mail($mail);
        $this->set_pays($pays);
    }


    

    /**
     * Get the value of _mail
     */ 
    public function get_mail()
    {
        return $this->_mail;
    }

    /**
     * Set the value of _mail
     *
     * @return  self
     */ 
    public function set_mail($_mail)
    {
        if(strlen($_mail) < 5){
            return;
        }

        $this->_mail = $_mail;

        return $this;
    }

    /**
     * Get the value of _pays
     */ 
    public function get_pays()
    {
        return $this->_pays;
    }

    /**
     * Set the value of _pays
     *
     * @return  self
     */ 
    public function set_pays($_pays)
    {
        $this->_pays = $_pays;

        return $this;
    }
}