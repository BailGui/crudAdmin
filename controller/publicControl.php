<?php

if(isset($_GET['json'])){
    $datas = getAllOurdatas($db);
    if(!is_string($datas)){
        echo json_encode($datas);
    }
    exit();
}

if(isset($_GET['connect'])){

    if(isset($_POST['username'],$_POST['userpwd'])){        // dans connect.view tu as utiliser "userpwd"!!!!

        $username = htmlspecialchars(strip_tags(trim($_POST['username'])),ENT_QUOTES);
        $userpwd = trim($_POST['userpwd']);              // dans connect.view tu as utiliser "userpwd"!!!!
        $connection = connectAdministrator($db,$username,$userpwd);

        if($connection === true){
            header("Location: ?bienvenue");
            die();
        }else{
            $error = "Login et/ou mot de passe incorrecte(s)";
        }
    }

require "../view/public/connect.view.html.php";
die();

}

$ourDatas = getAllOurdatas($db);
include "../view/public/homepage.view.html.php"; 