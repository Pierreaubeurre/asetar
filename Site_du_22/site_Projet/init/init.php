<?php

//Permet de définir les paramètres d'apache

//Active les erreurs
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

//Insert le controleur principal
require_once "controleur/controleurPrincipal.php"

?>

