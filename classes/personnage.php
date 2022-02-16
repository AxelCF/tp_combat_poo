<?php

Class Personnage{
    // Attributs de cette classe. (private) -> encapsulation
    private $healthPoints;
    private $damagePoints;
    private $name;
    // Function qui initialise les attributs de cette classe.
    function __construct($name){
        // A chaque nouvelle instance, on spécifie le nom du personnage dans le constructeur.
        $this->name = $name;
        // A chaque nouvelle instance, on initialise des valeurs aléatoire aux attributs.
        $this->healthPoints = rand(100, 999);
        $this->damagePoints = rand(1, 100);
    }
    public function receiveDamage($argument){
        if($this->healthPoints > 0){
            $this->healthPoints -= $argument;
            if($this->healthPoints < 0){
                $this->healthPoints = 0;
            }
        }else{
            $this->healthPoints = 0;
        }
    }
    public function hitAnotherCharacter($argument){
        $argument->receiveDamage($this->damagePoints);
    }
    // Méthodes "GET" qui récupère les valeurs des attributs de cette classe. (encapsulation)
    public function getHealthPoints(){
        return $this->healthPoints;
    }
    public function getDamagePoints(){
        return $this->damagePoints;
    }
    public function getName(){
        return $this->name;
    }
    // Méthodes "SET" qui modifie les valeurs des attributs de cette classe (encapsulation).
    public function setHealthPoints($argument){
        $this->healthPoints = $argument;
    }
    public function setDamagePoints($argument){
        $this->damagePoints = $argument;
    }
    public function setName($argument){
        $this->name = $argument;
    }
}