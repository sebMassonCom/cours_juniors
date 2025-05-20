<?php

define('SERVER', 'mysql:server=localhost;dbname=juniors3');
define('USER', 'root');
define('PASSWORD', '');

try{
    $db = new PDO(SERVER,USER,PASSWORD);
} catch (Exception $e){
    echo $e->getMessage();
}