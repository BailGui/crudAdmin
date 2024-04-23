<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Homepage</title>
</head>
<body>
    <h1>Admin Homepage</h1>
    <nav>
        <ul>
            <li><a href="./">Accueil Admin</a></li>
            <li><a href="?insert">Ajouter une data</a></li>
            <li><a href="?disconnect">Déconnexion</a>       
        </ul>
    </nav>
    <div class="content">
        <h2>Admin de nos datas</h2>
        <?php if(isset($_GET['zut'])): ?>

            <h2>Insertion réussie</h2>

        <?php endif ?>
        
        <?php if(isset($message)): ?>
               <h3><?=$message?></h3>
        <?php elseif(isset($error)): ?>
               <h3 class="error"><?=$error?></h3>

        <?php else: ?>

    </div>
</body>
</html>
