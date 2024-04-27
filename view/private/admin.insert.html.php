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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">
    <title>Admin insertion</title>
</head>
<body>
    <h1>Admin Insertion</h1>
    <?php 
    include "../view/inc/navAdmin.php";
    ?>
    <div class="content">
        <h2>Insertion d'une data</h2>
        <?php if(isset($error)): ?>
                <h3 class="error"><?=$error?></h3>
        <?php endif ?>
       <form action="" name="ourdatas" method="POST">
        <input type="text" name="title" placeholder="title" required><br>
        <textarea name="ourdesc" placeholder="Descrition" required></textarea><br>
        <input type="number" step="0.0000001" name="latitude" placeholder="latitude" required><br>
        <input type="number" step="0.0000001" name="longitude" placeholder="longitude" required><br>
        <input type="submit" value="Insérer" />
       </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>