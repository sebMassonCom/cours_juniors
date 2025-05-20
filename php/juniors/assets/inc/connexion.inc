<?php 
define('SERVER', 'mysql:server=localhost;dbname=juniors');
define('USER', 'root');
define('PWD','');

try{
    $db = new PDO(SERVER, USER, PWD);
} catch (Exceptions $e){
    echo $e->getMessage();
}