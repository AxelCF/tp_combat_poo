<?php

Class CombatManager {

    public function countCombat(){

    }
    public function editCombat(){

    }
    public function removeCombat(){
        
    }
    public function addCombat(){
        try {
            $bdd = new PDO("mysql:host=localhost;dbname=jeu_combat;charset=utf8","root", "");
            $addCombat = $bdd->prepare("INSERT INTO combats (id_personnage, id_personnage2) VALUE (?, ?)");
            $addCombat->execute(array());
        } catch (Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }
}