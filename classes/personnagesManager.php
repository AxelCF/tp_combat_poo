<?php

require_once("./classes/personnage.php");

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
            $existsCharacter = $bdd->prepare("SELECT * FROM personnages WHERE id = ?");
            $existsCharacter->execute(array($argumentId));
            if($existsCharacter->fetch()){
                echo($argumentId . " existe !");
            }
            else{
                echo($argumentId . " n'existe pas!");
            }
        } catch (Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }
    public function selectCharacter($argument){
        $cookie_name = "selectCharacter";
        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie is not set!";
            $cookie_value = $argument;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/"); // 86400 = 1 day
        } else {
            $cookie_value = $argument;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/"); // 86400 = 1 day
            echo "Cookie is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }
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
        $nouveauPersonnage = new Personnage($argumentNom);
        $healthPoints = $nouveauPersonnage->getHealthPoints();
        $damagePoints = $nouveauPersonnage->getDamagePoints();
        try {
            $bdd = new PDO("mysql:host=localhost;dbname=jeu_combat;charset=utf8","root", "");
            $addCharacter = $bdd->prepare("INSERT INTO personnages (personnage, health, damage) VALUE (?, ?, ?)");
            $addCharacter->execute(array($argumentNom, $healthPoints, $damagePoints));
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