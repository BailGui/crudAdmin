<?php

$ourDatas = getAllOurdatas($db); 

if(isset($_GET['disconnect'])){

     disconnectAdministrator();
     die();

}

if(isset($_GET['update'])&&ctype_digit($_GET['update'])){
    $idUpdate = (int) $_GET['update'];

    if(isset(
        $_POST['title'],
        $_POST['ourdesc'],
        $_POST['latitude'],
        $_POST['longitude']
    )){
        $idourdatas = $idUpdate;
        $title = htmlspecialchars(strip_tags(trim($_POST['title'])),ENT_QUOTES);
        $description = htmlspecialchars(trim($_POST['ourdesc']),ENT_QUOTES);
        $latitude = (float) $_POST['latitude'];
        $longitude = (float) $_POST['longitude'];

        $update = updateOurdatasByID($db,$idourdatas,$title,$description,$latitude,$longitude);

        if($update===true){
            header("Location: ?bienvenue");
            exit();
        }elseif($update===false){
            $errorUpdate = "Cet article n'a pas été modifié";
        }else{
            $errorUpdate = $update;
        }

}

$updateDatas =  getOneOurdatasByID($db, $idUpdate);

include "../view/private/admin.update.html.php";

die();
}



if(isset($_GET['insert'])){

    if(isset(
        $_POST['title'],
        $_POST['ourdesc'],
        $_POST['latitude'],
        $_POST['longitude']
    )){

        $title = htmlspecialchars(strip_tags(trim($_POST['title'])),ENT_QUOTES);
        $description = htmlspecialchars(trim($_POST['ourdesc']),ENT_QUOTES);
        $latitude = (float) $_POST['latitude'];
        $longitude = (float) $_POST['longitude'];
        $insert = addNewDatas($db,$title,$description,$latitude,$longitude);

        if($insert === true){
            header("Location: ?insert");
            exit();
           }
    
        }


    include "../view/private/admin.insert.html.php";

    die();
}

if(isset($_GET['delete'])&&ctype_digit($_GET['delete'])){
    $idDelete = (int) $_GET['delete'];
    
    if (isset($_GET['ok'])) { 
        $delete = deleteOneDataByID($db, $idDelete);
        if($delete===true){
            header("Location: ?bienvenue");
            exit();
        }elseif($delete===false){
            $error = "Problème avec cette suppression";
        }else{
            $error = $delete;
        }
    }


    $getOneData = getOneOurdatasByID($db, $idDelete);

    include "../view/private/admin.delete.view.html.php";
    
    die();

}


