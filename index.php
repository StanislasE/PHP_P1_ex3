<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 3</title>
</head>
<body>
 <p>   
<?php
    $km = 1 ;
    echo $km . ' - ' ;
    $km = 3 ; // L'affectation d'une nouvelle valeur écrase l'ancienne qui était dans la variable
    echo $km . ' - ' ;
    $km = 125 ;
    echo $km ;
?>
</p>
</body>
</html>