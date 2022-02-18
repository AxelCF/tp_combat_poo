<?php
include_once("./classes/personnage.php");
include_once("./classes/personnagesManager.php");

$nouveauPersonnage = new PersonnagesManager();
//$nouveauPersonnage->addCharacter("Benji");
$nouveauPersonnage->existsCharacter(2);


