<?php

$page=filter_input(INPUT_GET,'page',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if($page == 'coucou'){
    include 'views/coucou.php';
}else{
    include 'views/login.php';
}