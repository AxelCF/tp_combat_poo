<?php
require_once '../config/db.php';

if (isset ($_POST['personnage']) && !empty($_POST['personnage'])) {
    $req = $bdd->prepare ("INSERT INTO personnages(personnage) VALUES (?)");
    $req -> execute(array($_POST['personnage']));
    header ('Location: ../index.php');

}else { 
    echo 'error';
    header ('Location: ../classes/personnagesManager.php');
}
   