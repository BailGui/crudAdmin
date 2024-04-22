<?php

if(isset($_GET['disconnect'])) administratorDisconnect();

if(isset($_GET['update'])&&ctype_digit($_GET['update'])){

    $id = (int) $_GET['update'];

    if(isset(
        $_POST['idourdatas'],
        $_POST['title'],
        $_POST['ourdesc'],
        $_POST['latitude'],
        $_POST['longitude']
    )){
        $idourdatas = (int) $_POST['idourdatas'];
        $title = htmlspecialchars(strip_tags(trim($_POST['title'])),ENT_QUOTES);
        $ourdesc = htmlspecialchars(trim($_POST['ourdesc']),ENT_QUOTES);
        $latitude = (float) $_POST['latitude'];
        $logintude = (float) $_POST['longitude'];

    }

    $update = getOneOurdatasByID($connect,$id);
    var_dump($update,$_POST);

    require "../view/private/admin.update.html.php";

}


