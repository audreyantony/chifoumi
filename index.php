<?php

if (!isset($_GET['page'])) {
    require_once "files/chifoumi.php";
}else{

    $page = $_GET['page'];

    switch ($page){
        case "chifoumi":
            require_once "files/chifoumi.php";
            break;
        case "regles":
            require_once "files/regles.php";
            break;
        default:
            require_once "files/404.php";
    }
}

