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