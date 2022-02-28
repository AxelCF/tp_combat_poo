<?php

require_once '../config/db.php';

Class PersonnagesManager{


    public function removeCharacter($argumentId){
            
            $removeCharacter = $bdd->prepare("DELETE FROM personnages WHERE id = ?;");
            $removeCharacter->execute(array($argumentId));

    }
    public function existsCharacter($argumentId){

            
            $existsCharacter = $bdd->prepare("SELECT * FROM personnages WHERE id = ?;");
            $existsCharacter->execute(array($argumentId));
            var_dump($existsCharacter);
       
    }
    public function selectCharacter($argument){

    }
    public function countCharacters(){

            
            $countCharacters = $bdd->prepare("SELECT COUNT(*) FROM (personnages);");
            $countCharacters->execute(); 
            var_dump($countCharacters->fetch());
    }
    public function addCharacter($argumentNom){

            
            $addCharacter = $bdd->prepare("INSERT INTO personnages (personnage) VALUE (?)");
            $addCharacter->execute(array($argumentNom));
       
    }

} ?>