<?php
require_once 'core/Database.php';
new Database;

class ModelListePays{

    public function getList(){
        return Database::$db->query("SELECT * FROM pays");
    }

}