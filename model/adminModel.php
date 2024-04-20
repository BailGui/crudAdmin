<?php

function connectAdministrator(PDO $co, string $user, string $password) : bool|string 
{
    $sql="SELECT * FROM `` WHERE `` = ?";

    $prepare = $co->prepare($sql);

    try{
        $prepare->execute([$user]);
    }
}