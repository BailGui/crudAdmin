<?php
if(!isset($_SESSION['monID']) || 
$_SESSION['monID']!== session_id())
{
header("location: ?connect");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Update</title>
</head>
<body>
<h1>Admin Update</h1>
<?php 
    include "../view/inc/navAdmin.php";
?>
    <div class="content">
        <h2>Modification d'une data</h2>
        <?php if(isset($error)): ?>
            <h3 class="error"><?=$error?></h3>
        <?php endif?>
        <form action="" name="ourdatas" method="POST">
            <input type="text" name="title" placeholder="title" value="<?=$updateDatas['title']?>" required><br>
            <textarea name="ourdesc" placeholder="Description" required><?=$updateDatas['ourdesc']?></textarea><br>
            <input type="number" step="0.0000001" name="latitude" placeholder="latitude" value="<?=$updateDatas['latitude']?>" required><br>
            <input type="number" step="0.0000001" name="longitude" placeholder="longitude" value="<?=$updateDatas['longitude']?>" required><br>
            
            <input type="submit" value="Mettre à jour" />
       </form>
        </form>
    </div>
    
</body>
</html>