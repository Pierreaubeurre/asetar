<?php

//Liste des pages possibles
require_once "parametre/pageListe.php";

function mainControl (string $page="accueil")//A modifier si on rajoute des pages
{
	global $action;//importe le tableau de la pageListe.php
	switch ($page)
	{
		case "accueil"	:	require_once $action["accueil"];
					affAccueil();
					break;
		case "profile" :	require_once $action["visuProfile"];
					afficheProfile();
					break;
		case "connexion":	require_once $action["connexion"];
					login();
					break;
		case "inscription":	require_once $action["inscription"];
					break;
        case "deconnexion": require_once $action["deconnexion"];
	}
}
	
?>

