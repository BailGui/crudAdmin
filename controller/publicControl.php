<?php

if(isset($_GET['json'])){
    $datas = getAllGeoloc($db);
    if(!is_string($datas)){
        echo json_encode($datas);
    }
    die();
}



if(isset($_GET['connect'])){

    if(isset($_POST['username'],$_POST['passwd'])){
        $username = htmlspecialchars(strip_tags(trim($_POST[''])),ENT_QUOTES);
        $userpwd = trim($_POST['']);
        $connect = connectAdministrator($db,$username,$userpwd);

        if($connect===true){
            header("Location: ./");
            die();
        }
    }

include "../view/public/connect.view.html.php";
die();

}

include "../view/public/homepage.view.html.php"