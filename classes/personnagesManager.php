<?php

Class PersonnagesManager{

    public function removeCharacter($argumentId){
        try {
            $bdd = new PDO("mysql:host=localhost;dbname=jeu_combat;charset=utf8","root", "");
            $removeCharacter = $bdd->prepare("DELETE FROM personnages WHERE id = ?;");
            $removeCharacter->execute(array($argumentId));
        } catch (Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }
    public function existsCharacter($argumentId){
        try {
            $bdd = new PDO("mysql:host=localhost;dbname=jeu_combat;charset=utf8","root", "");
            $existsCharacter = $bdd->prepare("SELECT * FROM personnages WHERE id = ?;");
            $existsCharacter->execute(array($argumentId));
            var_dump($existsCharacter);
        } catch (Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }
    public function selectCharacter($argument){

    }
    public function countCharacters(){
        try {
            $bdd = new PDO("mysql:host=localhost;dbname=jeu_combat;charset=utf8","root", "");
            $countCharacters = $bdd->prepare("SELECT COUNT(*) FROM (personnages);");
            $countCharacters->execute(); 
            var_dump($countCharacters->fetch());

        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    public function addCharacter($argumentNom){
        try {
            $bdd = new PDO("mysql:host=localhost;dbname=jeu_combat;charset=utf8","root", "");
            $addCharacter = $bdd->prepare("INSERT INTO personnages (personnage) VALUE (?)");
            $addCharacter->execute(array($argumentNom));
        } catch (Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }

} ?>

<!--

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
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
--> 