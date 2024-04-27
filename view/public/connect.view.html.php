<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Connexion</h1>
    <?php 
    include "../view/inc/navPublic.php";
    ?>
    <div id="content">
        <h3>Connexion à notre administration</h3>
        <?php if(isset($error)): ?>
            <h4 id="alert"><?=$error?></h4>
        <?php endif ?>    
        <form action="" method="POST" name="connect">
            <input type="text" name="username" placeholder="Votre login" required><br>
            <input type="password" name="passwd" placeholder="Votre mot de passe" required><br>
            <input type="submit" value="connexion">
        </form>
    </div>
</body>
</html>