<?php

require_once "../config.php";


try{
    $db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET . ";port=" . DB_PORT, DB_LOGIN, DB_PASSWORD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,]);

}catch (Exception $e) {
    die($e->getMessage());
}

echo json_encode(getDatas($db));

$db = null;

function getDatas(PDO $db): array

{
  $sql = "SELECT * FROM `ourdatas` ORDER BY idourdatas ASC";
  $query = $db->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;
}