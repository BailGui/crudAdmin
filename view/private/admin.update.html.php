<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Update</title>
</head>
<body>
<h1>Admin Update</h1>
    <nav>
        <ul>
            <li><a href="./">Accueil Admin</a></li>
            <li><a href="?insert">Ajouter une data</a></li>
            <li><a href="?disconnect">Déconnexion</a>       
        </ul>
    </nav>
    <div class="content">
        <h2>Modification d'un data</h2>
        <?php if(isset($error)): ?>
            <h3 class="error"><?=$error?></h3>
        <?php endif?>
    </div>
    
</body>
</html>