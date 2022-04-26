<?php

	$action= array();
	$action["accueil"]=		"controleur/accueil/accueil.php";
	$action["connexion"]=		"controleur/login/login.php";
	$action["inscription"]=	"controleur/inscription/inscription_Controleur.php";
	$action["visuProfile"]= "controleur/profile/C_profile.php";
	$action["deconnexion"]= "controleur/login/C_deco.php";
	$action["modifProfil"]= "controleur/profile/C_Modif_Profil.php"; 
	$action["boutique"]= "controleur/boutique/C_boutique.php";
	
	$vueListe= array();
	$vueListe["entete"]=		"vue/header";
	$vueListe["pied"]=		"vue/foot.html";
	$vueListe["formLogin"]=	"vue/login/connexion.html";
	$vueListe["accueil"]=		"vue/accueil/accueil.html";
	$vueListe["accueilDeco"]= "vue/accueil/accueilDéco.html";
	$vueListe["inscription"]=	"vue/inscription/inscription.html";
   	$vueListe["profile"]= 		"vue/profile/vueProfile.html";
   	$vueListe["modifProfil"]=	"vue/profile/modifProfil.html";
   	$vueListe["boutique"]= "vue/boutique/Boutique.html";
?>
