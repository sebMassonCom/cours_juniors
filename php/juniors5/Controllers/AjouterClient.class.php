<?php
require_once 'Models/ModelAjoutClient.class.php';
require_once 'Models/ModelListePays.class.php';

require_once 'Controllers/Client.class.php';

class AjouterClient{

    private $_model;
    private $_model_listePays;
    private $_client;

    public function __construct(){
        $this->_model_listePays = new ModelListePays();
        $pays = $this->_model_listePays->getList();
        
        include_once 'Views/ajouter_client.php';
    }
   
    private function saveClient(Client $client){
        $this->_model = new ModelAjoutClient();
        $this->_model->ajout($client->get_mail(), $client->get_pays())
        ;
    }
   
}