<?php
include "../view/inc/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Admin Homepage</title>
</head>
<body class="bg-primary">
    <header>
        <div class="container">
            <div class="row mb-5">
    <?php 
    include "../view/inc/navAdmin.php";
    ?>
    </div>
    </div>
    </header>
    <div class="content">
    <div class="container">
        <div class="row">
            <div class="col p-5">
        <h2 class="text-center">Admin de nos datas</h2>
        <?php if(isset($_GET['404'])): ?>

            <h2>Insertion réussie</h2>

        <?php endif ?>
        
        <?php if(isset($message)): ?>
               <h3><?=$message?></h3>
        <?php elseif(isset($error)): ?>
               <h3 class="error"><?=$error?></h3>

        <?php else: ?>

            </div>
            </div>

            <table>
            <tr>
                <th>idourdatas</th>
                <th>title</th>
                <th>ourdesc</th>
                <th>latitude</th>
                <th>longitude</th>
                <th>Modifier</th>
                <th>supprimer</th>
            </tr>
                <?php foreach($ourDatas as $item): ?>
                    <tr>
                <td><?=$item['idourdatas']?></td>
                <td><?=$item['title']?></td>
                <td><?=$item['ourdesc']?></td>
                <td><?=$item['latitude']?></td>
                <td><?=$item['longitude']?></td>
                <td><a href="?update=<?=$item['idourdatas']?>"><img src="img/update.png" width="32" height="32" alt="update" /></a></td>
                <td><a href="?delete=<?=$item['idourdatas']?>"><img src="img/garbage.png" width="52" height="32" alt="delete" /></a></td>
            </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
