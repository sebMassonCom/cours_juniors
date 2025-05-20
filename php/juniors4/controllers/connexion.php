<?php
session_start(); 
require_once 'models/Model_Connexion.php';
class Connexion{

    private $_user;
    private $_password;
    private $_model;
    

    public function __construct($l, $p){
        $this->_user = $l;
        $this->_password = $p;
        $this->_model = new Model_Connexion();
        $this->controle_connexion();
    }
    
    private function controle_connexion(){
        $this->_model->autorisation($this->_user, $this->_password);
    }

}






