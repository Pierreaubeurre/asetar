<?php
/*

Fichier php de type : Modele

Fonction du modele:

-Récupère les informations du controleur
-Modifie la bd avec les nouvelles informations rentrées

*/


include_once "connSQL_modele.php";//Appel le modèle de connexion à la bd, obligatoire lors de la manipulation de cette bd

function modif ()//Remplace les informations envoyés dans la bd
{
	$conn=connexionSQL();//Envoie une erreur en cas d'echec de connexion avec la MariaDB.Obligatoire
	if ($conn == FALSE)
	{
		echo "Erreur CONNEXION SQL";
	}
	
	$sql=("UPDATE PROFIL
	SET NOM = '$_POST[NOM]', 
	PRENOM = '$_POST[PRENOM]', 
	AGE = '$_POST[AGE]',
	BIO = '$_POST[BIO]',
	CODE_POSTAL = '$_POST[CODE_POSTAL]',
	DATE_NAISSANCE = '$_POST[DATE_NAISSANCE]',
	TEL = '$_POST[TEL]',
	CENTRE_FORMATION = '$_POST[CENTRE_FORMATION]',
	LANGUE = '$_POST[LANGUE]',
	MAIL = '$_POST[MAIL]'
	WHERE PSEUDO_U='$_SESSION[utilisateur]';");

	mysqli_query($conn,$sql);
}

?>
