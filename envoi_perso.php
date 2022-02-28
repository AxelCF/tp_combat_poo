<?php
require_once './config/db.php';
require_once './config/autoload.php';

if (isset ($_POST['personnage']) && !empty($_POST['personnage'])) {
    $nouveauPersonnage = new PersonnagesManager();

    $nouveauPersonnage->addCharacter($_POST['personnage']);
    
    header ('Location: ./index.php');

}else { 
    echo 'error';
    header ('Location: ./classes/personnagesManager.php');
}
   