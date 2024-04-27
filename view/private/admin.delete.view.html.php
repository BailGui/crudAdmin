<?php
include "../view/inc/connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppression d'un lieu</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Suppression d'un lieu</h1>
    <?php 
    include "../view/inc/navAdmin.php";
    ?>
    <div id="content">
        <h3>Article à supprimer</h3>
    
        <?php
        if(isset($error)):
            ?>
            <h3 id="alert"><?=$error?></h3>
        <?php
        endif;
        
        if(is_string($getOneData)):
        ?>
            <h3 id="alert"><?=$getOneData?></h3>
        <?php
        // Pas de `geoloc` trouvée
        elseif($getOneData===false):
        ?>
            <h3 id="comment">Ce le lieu n'existe plus !</h3>
        <?php
        // Nous avons un lieu
        else:
        ?>
        <h4>Titre : <?=$getOneData['title']?></h4>
        <p><?=$getOneData['ourdesc']?></p>
        <h4>Voulez-vous vraiment supprimer cet article</h4>
        <a href="?delete=<?=$idDelete?>&ok"><button value="supprimer">supprimer</button></a> | <a href="./"><button value="Non">Ne pas supprimer</button></a>
                
        <?php endif ?>   
    </div>
</body>
</html>