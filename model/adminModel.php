<?php

function connectAdministrator(PDO $co, string $user, string $password) : bool|string 
{
    $sql="SELECT * FROM `` WHERE `` = ?";

    $prepare = $co->prepare($sql);

    try{
        $prepare->execute([$user]);
        if($prepare->rowCount()===0) return false;
        $result = $prepare->fetch();

        if(password_verify($password, $result[''])){

            $_SESSION = $result;
            unset($_SESSION['']);
            return true;
        }
    }

catch(Exception $e){
    return $e->getMessage()
}
}