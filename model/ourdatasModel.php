<?php

function getAllOurdatas(PDO $db): array|string {

    $sql = "SELECT * FROM ourdatas ORDER BY idourdatas;";
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
    $sql = "SELECT * FROM `ourdatas` WHERE `idourdatas` = :id";
    $prepare = $db->prepare($sql);

    $prepare->bindParam("id", $id, PDO::PARAM_INT);

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
  $sql = "UPDATE `ourdatas` SET `title` = ?, `ourdesc` = ?, `latitude` = ?, `longitude` = ? WHERE `idourdatas` = ?";
  $prepare = $db->prepare($sql);
  try{
    $prepare->execute([
        $titre,
        $description,
        $latitude,
        $longitude,
        $idourdatas
    ]);

    if($prepare->rowCount()===0) return false;

    return true;

  }catch(Exception $e){
     return $e->getMessage();

}
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

function deleteOneDataByID(PDO $db, int $id): bool|string
{
    $sql = "DELETE FROM `ourdatas` WHERE `idourdatas`= :id ";
    $stmt = $db->prepare($sql);
    $stmt->bindValue("id", $id, PDO::PARAM_INT);

    try{
        $stmt->execute();
        if($stmt->rowCount()===0) return false;
        return true;
    }catch(Exception $e){
        return $e->getMessage();
    }

}

function addNewDatas (PDO $db, $title, $desc, $lat, $long) {
    $sql = "INSERT INTO `ourdatas`(`title`, `ourdesc`, `latitude`, `longitude`) VALUES (?,?,?,?)";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(1,$title);
    $stmt->bindValue(2,$desc);
    $stmt->bindValue(3,$lat);
    $stmt->bindValue(4,$long);

    try {
        $stmt->execute();
        return true;
    }catch(Exception $e) {
        return $e->getMessage();
    }
}