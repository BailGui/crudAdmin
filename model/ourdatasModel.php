<?php

function getAllOurdatas(PDO $db, $order = "DESC"): array|string {

    $order = (in_array($order,['DESC','ASC'], true))? $order: "DESC";
    $sql = "SELECT * FROM ourdatas ORDER BY idourdatas $order;";
    try{
        $query = $db->query($sql);
        if($query->rowCount()===0) return "Pas encore de datas";
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;

    }catch(Exception $e){
        return['error'=>$e->getMessage()];
    }
    
}

function getOneOurdatasByID(PDO $db, int $id): array|string 
{
    $sql = "SELECT * FROM `ourdatas` WHERE `idourdatas` = ?";
    $prepare = $db->prepare($sql);

    try{
       $prepare->execute([$id]);
       if($prepare->rowCount()===0) return "Impossible de modifier cet article";
       $result = $prepare->fetch();
       $prepare->closeCursor();
       return $result;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function updateOurdatasByID(PDO $db, int $idourdatas, string $titre, string $description, float $latitude, float $longitude) : bool|string
{
return false;
}

function addOurdatas(PDO $db, string $titre, string $description, float $latitude,float $longitude) : bool|string
{
    $sql = "INSERT INTO `ourdatas` (`title`, `ourdesc`, `latitude`,`longitude`) 
            VALUES(?,?,?,?);";
    
    $prepare = $db->prepare($sql);

    try{
        $prepare->execute([$titre, $description, $latitude, $longitude]);
        $prepare->closeCursor();
        return true;
    }catch(Exception $e){
        return $e->getMessage();
    }

}