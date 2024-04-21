<?php

if(isset($_GET['connect'])){

    if(isset($_POST[''],$_POST[''])){
        $username = htmlspecialchars(strip_tags(trim($_POST[''])),ENT_QUOTES);
        $userpwd = trim($_POST['']);
        $connect = connectAdministrator($db,$username,$userpwd);

        if($connect===true){
            header("Location: ./");
            die();
        }
    }
}