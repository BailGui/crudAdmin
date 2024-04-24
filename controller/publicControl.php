<?php
if(isset($_GET['json'])){
    $datas = getAllOurdatas($db);
    if(!is_string($datas)){
        echo json_encode($datas);
    }
    exit();
}

if(isset($_GET['connect'])){

    if(isset($_POST['username'],$_POST['passwd'])){
        $connection = connectAdministrator($db,$_POST['username'],$_POST['passwd']);


        if($connection === true){
            header("Location: ./");
            die();
        }

    }

require "../view/public/connect.view.html.php";
die();

}

if(isset($_GET['json'])){
    $ourDatas = getAllOurdatas($db,"ASC");
    echo json_encode($ourDatas);
    die(); 
}

$ourDatas = getAllOurdatas($db);
if(is_string($ourDatas)) $message = $ourDatas;
elseif(isset($ourDatas['error'])) $error = $ourDatas['error'];

include "../view/public/homepage.view.html.php";