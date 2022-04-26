<?php

/*

Fichier php de type : Controleur

Remarque:

Ce controleur utilise le même script de récupération/affichage des données du profil que le controleur profil.
La fonction afficheProfil est donc basé sur le même modêle, sauf pour le langage.


Fonction du controleur:

-Appel le modèle , cherche les informations du profil
-Met les informations dans le html, par l'intermédiaire la variable $vue
-Affiche $vue
-Récupère les informations envoyés en méthodes POST
-Modifie la bd avec les nouvelles informations rentrées

*/



function afficheProfile()//Fonction d'affichage des données du profil,modifie la vue html comme le controleur profil
{
   	 global $vueListe,$data;
    
    
    	$vue = file_get_contents($vueListe["modifProfil"]);//Lit le html et le met dans une variable
    	
	require_once "modele/profil.php";//Appel le modèle

	getInfoProfil($_SESSION["utilisateur"]);//Utilise le pseudo de l'utilisateur pour récupérer les informations du profil
	
	
	for ($i = 1;$i < 12; $i++)//Place les informations dans le html (pour les zones de textes)
	{
		$vue=str_replace("%$i"."R", "$data[$i]",$vue);
	}
	
	if ($data[10]=="Français")//Lit la langue envoyé par la bd et met celle-ci en premier choix de la liste déroulante
	{
		$vue=str_replace("%L1",'<option value="Français">Français</option>',$vue);
		$vue=str_replace("%L2",'<option value="Anglais">Anglais</option>',$vue);
	}
	else
	{
		$vue=str_replace("%L1",'<option value="Anglais">Anglais</option>',$vue);
		$vue=str_replace("%L2",'<option value="Français">Français</option>',$vue);
	}
	
	
	echo $vue;
}

function modifProfil()//Fonction de changement du profil
{
	if ($_POST!=null)
	{
		require_once "modele/modifProfil_modele.php";
		modif();
	}	
}
    
    
    
   
if (!isset ($_SESSION["utilisateur"]))//vérifie si le user est connecté , redirige sur login sinon
{
	include_once "controleur/profile/js/pasco.php";
}



?>
 
