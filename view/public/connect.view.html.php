<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">
    <title>Connexion</title>
</head>
<body>
<header>
        <div class="container">
        <div class="row mb-5">
<?php 
    include "../view/inc/navPublic.php";
?>
        </div>
        </div>
</header>

<div class="container">
        <div class="row">
            <div class="col p-5">
        <h1 class="text-center">Connect to Admin.</h1>
        <?php if(isset($error)): ?>
            <h4 id="alert"><?=$error?></h4>
        <?php endif ?> 
        </div>
        </div>
</div>   
        <div class="row formulaire">
              <div class="col m-5">
            <form class="d-flex flex-column align-items-center justify-content-center" method="POST" action="">
                 <div class="form-group">
            <input type="text" class="form-control text-center bg-light" name="username" placeholder="Votre login" required><br>
            <input type="password" class="form-control text-center text-alert bg-light" name="passwd" placeholder="Votre mot de passe" required><br>
                </div>
                <div class="form-group">
            <input type="submit" class="form-control text-center text-white bg-success" value="connexion">
                </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>