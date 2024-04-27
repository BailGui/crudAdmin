<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Accueil</h1>
<?php 
    include "../view/inc/navAdmin.php";
?>

        <div id="resultat">
            <div id="map"></div>
            <div id="liste"></div>
        </div>
    

    <script src=" https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin="">
    </script>
    <script src="../js/carteJSON.js"></script>
</body>
</html>