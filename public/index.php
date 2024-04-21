<?php

session_stat();

require_once "../config.php";
require_once "../model/administratorModel.php"

try{

    $db = new PDO(DB_DRIVER . ".host=" . DB_HOST . ";dbname=". DB_NAME . ";charset=" . DB_CHARSET . ";port=" . DB_PORT , DB_LOGIN, DB_PASSWORD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,]);

}catch(Exception $e){
    die($e->getMessage());
}

if(isset($_SESSION[''])){

    require_once "../controller/adminControl.php"

}else{

    require_once "../controller/publicControl.php"

}

$db = null;