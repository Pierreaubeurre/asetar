<?php

	$action= array();
	$action["accueil"]=		"controleur/accueil/accueil.php";
	$action["connexion"]=		"controleur/login/login.php";
	$action["inscription"]=	"controleur/inscription/inscription_Controleur.php";
	$action["visuProfile"]= "controleur/profile/C_profile.php";
	$action["deconnexion"]= "controleur/login/C_deco.php";
	$action["modifProfile"]= "controleur/profile/C_Modif_Profile.php"; 
	
	$vueListe= array();
	$vueListe["entete"]=		"vue/header";
	$vueListe["pied"]=		"vue/foot.html";
	$vueListe["formLogin"]=	"vue/login/connexion.html";
	$vueListe["accueil"]=		"vue/accueil/accueil.html";
	$vueListe["inscription"]=	"vue/inscription/inscription.html";
    $vueListe["profile"]= "vue/profile/PageProfil.php";

?>
