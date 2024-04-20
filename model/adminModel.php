<?php

function connectAdministrator(PDO $co, string $user, string $password) : bool|string 
{
    $sql="SELECT * FROM `` WHERE `` = ?";

    $prepare = $co->prepare($sql);

    try{
        $prepare->execute([$user]);
        if($prepare->rowCount()===0) return false;
        $result = $prepare->fetch();
    }

catch(Exception $e){
    return $e->getMessage()
}
}