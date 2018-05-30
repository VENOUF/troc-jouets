<?php
// connection user
if (!isset($_SESSION)) {
    session_start();
}

/**
 * Debugger une variable
 * @param type $var La variable à afficher
 * @param bool $die Arrêter l'execition
 */

function debug($var, bool $die= true){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    if ($die){
        die;
    }
}


function currentUser() {
    if (isset($_SESSION["id"])) {
        return getOneUser($_SESSION["id"]);
    }
    return null;
}


function getHeader(string $title){
    require_once 'layout/header.php';
}

function getFooter(){
    require_once 'layout/footer.php'; 
}

function getMenu(){
    require_once 'layout/menu.php'; 
}