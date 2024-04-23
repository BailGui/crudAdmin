<?php

if(isset($_GET['connect'])){

    if(isset($_POST['username'],$_POST['passwd'])){
        $username = htmlspecialchars(strip_tags(trim($_POST['username'])),ENT_QUOTES);
        $userpwd = trim($_POST['passwd']);
        $connect = connectAdministrator($db,$username,$passwd);

        if($connect===true){
            header("Location: ./");
            die();
        }
    }

include "../view/public/connect.view.html.php";
die();

}

if(isset($_GET['json'])){
    $ouDatas = getAllOurdatas($connect,"ASC");
    echo json_encode($ourDatas);
    die(); 
}

$ourDatas = getAllOurdatas($connect);
if(is_string($ourDatas)) $message = $ourDatas;
elseif(isset($ourDatas['error'])) $error = $ourDatas['error'];

include "../view/public/homepage.view.html.php"