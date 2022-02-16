<?php
include_once("./classes/personnage.php");

$personnageOne = new Personnage("Dylan");
$personnageTwo = new Personnage("Axel");

echo("Nom du personnage : " . $personnageOne->getName() . "<br>");
echo("Point de vie : " . $personnageOne->getHealthPoints() . "<br>");
echo("Point de dégats : " . $personnageOne->getDamagePoints() . "<br><br>");

echo("Nom du personnage : " . $personnageTwo->getName() . "<br>");
echo("Point de vie : " . $personnageTwo->getHealthPoints() . "<br>");
echo("Point de dégats : " . $personnageTwo->getDamagePoints() . "<br><br>");

$personnageTwo->hitAnotherCharacter($personnageOne);
$personnageOne->hitAnotherCharacter($personnageTwo);
echo("Point de vie : " . $personnageOne->getHealthPoints() . "<br>");