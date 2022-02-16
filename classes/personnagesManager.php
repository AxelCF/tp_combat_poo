<?php 
require_once "../config/db.php";
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="../process/envoi_perso.php" method="POST" > 
    <label for="personnage">Pseudo</label>
        <input type="text" name="personnage" placeholder="pseudo">
</form>

</body>
</html>