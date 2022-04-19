<?php
/*

Fichier php de type : index

Remarque:

Ce fichier php est la porte d'entrée du client vers le site. N'importe qu'elle page afficher passe forcément par celui-ci.
Ce site ce base sur la méthode de programmation MVC.


Fonction du controleur:

-Commence une session
-Appel init.php, exécute la fonction maicontrol

*/

session_start();

require_once "init/init.php";

if(isset($_GET["page"])) //Donne la valeur "accueil" à $page si il n'existe pas
{
	$page=$_GET["page"];
}
else 
{
	$page="accueil"; 
}

mainControl($page);
?>
