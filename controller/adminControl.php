<?php

if(isset($_GET['disconnect']))
include ("../model/logoutModel.php");
     die();

if(isset($_GET['update'])&&ctype_digit($_GET['update'])){

    $idUpdate = (int) $_GET['update'];

    if(isset(
        $_POST['title'],
        $_POST['ourdesc'],
        $_POST['latitude'],
        $_POST['longitude']
    )){
        $idgeoloc = $idUpdate;
        $title = htmlspecialchars(strip_tags(trim($_POST['title'])),ENT_QUOTES);
        $description = htmlspecialchars(trim($_POST['ourdesc']),ENT_QUOTES);
        $latitude = (float) $_POST['latitude'];
        $longitude = (float) $_POST['longitude'];

        $insert = addOurdatas($db,$idgeoloc,$title,$description,$latitude, $longitude);

        if($update===true){
            header("Location: ./");
            exit();
        }elseif($update===false){
            $errorUpdate = "Cet article n'a pas été modifié";
        }else{
            $errorUpdate = $update;
        }
}

$updateDatas =  updateOurdatasByID($db, $titre,$description,$latitude,$longitude,$idourdatas);   // t'as oublié le $db

include "../view/private/admin.insert.html.php";

die();
}



if(isset($_GET['insert'])){

    if(isset(
        $_POST['title'],
        $_POST['idourdatas'],   // t'as oublié
        $_POST['ourdesc'],
        $_POST['latitude'],
        $_POST['longitude']
    )){

        $title = htmlspecialchars(strip_tags(trim($_POST['title'])),ENT_QUOTES);
        $ourDatas = htmlspecialchars(strip_tags(trim($_POST['idourdatas'])),ENT_QUOTES);
        $description = htmlspecialchars(trim($_POST['ourdesc']),ENT_QUOTES);
        $latitude = (float) $_POST['latitude'];
        $longitude = (float) $_POST['longitude'];

        $insert = updateOurdatasByID($db,$ourDatas,$title,$description,$latitude,$longitude); // et encore ici (ourData)

        if($insert === true){
            header("Location: ./");
            exit();
           }
    
        }


    include "../view/private/admin.insert.html.php";

    die();
}


//                  CE FONCTION N'EXISTE PAS - FAUT LE CRÉE
/*
if(isset($_GET['delete'])&&ctype_digit($_GET['delete'])){

    $idDelete = (int) $_GET['delete'];
    if(isset($_GET['ok'])){
        $delete = deleteOneDatasByID($db, $idDelete);
        if($delete===true){
            header("Location: ./");
            exit();
        }elseif($delete===false){
            $error = "Problème avec cette suppression";
        }else{
            $error = $delete;
        }
    }

    $getOneGeoloc = getOneGeolocByID($db, $idDelete);
}


*/
$ourDatas = getAllOurdatas($db);


require "../view/private/admin.homepage.html.php";


