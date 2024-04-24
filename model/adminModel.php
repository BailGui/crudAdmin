<?php



function connectAdministrator(PDO $db, string $user, string $password) : bool|string 
{

    $sql="SELECT * FROM `administrator` WHERE `username` = ?";

    $prepare = $db->prepare($sql);

    try{
        $prepare->execute([$user]);
    //    if($prepare->rowCount()===0) return "Utilisateur inconnu"; Faut pas signaler que user = bon/mauvais. Cela permettre les Bots de reconnaitre les users existant
        $result = $prepare->fetch();

        if(password_verify($password, $result['passwd'])){

            $_SESSION['idadministrator'] = $result['idadministrator'];
            $_SESSION['login'] = $result["username"]; // $login n'existe pas ici
            return true;
        }else{
            return false;
        }

    }catch(Exception $e){
    return $e->getMessage();
}
}
