<?php


/*

Fichier php de type : Controleur

Fonction du controleur:
-Appel le modèle , cherche les informations du profil
-Met les informations dans le html, par l'intermédiaire  de la variable $vue
-Envoie $vue au client

*/


function afficheProfile ()
    {
    global $vueListe,$data;
    
    
    	$vue = file_get_contents($vueListe["profile"]);
	require_once "modele/profil.php";

	getInfoProfil();
	
	
	for ($i = 1;$i < 12; $i++)//Permet de lire le tableau envoyé pour le modèle et de remplacer dans le html
	{
		$vue=str_replace("%$i"."R", "$data[$i]",$vue);
	}
	
	echo $vue;//Action final correspondant à l'affichage du html
    }
if (!isset ($_SESSION["utilisateur"]))//vérifie si le user est connecté , redirige sur login si non
{
	include_once "controleur/profile/js/pasco.php";
}

?>
