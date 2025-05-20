<?php
include 'assets/inc/header.php';

// root .... disptacher
$page = filter_input(INPUT_GET, 'page');
if(file_exists('Controllers/'.$page.'.class.php')){
    require_once 'Controllers/'.$page.'.class.php';
    new $page;
} else {
    require_once 'Controllers/404.php';
    new Page404;
}