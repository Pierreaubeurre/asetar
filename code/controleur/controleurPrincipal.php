<?php

//Liste des pages possibles
require_once "parametre/pageListe.php";

function mainControl (string $page="accueil")//A modifier si on rajoute des pages
{
	global $action;
	switch ($page)
	{
		case "accueil"	:	require_once $action["accueil"];
					login();
					break;
		case "profile" :	require_once $action["profil"];
					profile();
					break;
		case "connexion":	require_once $action["connexion"];
					login();
					break;
		
		
	}
}
	
?>

