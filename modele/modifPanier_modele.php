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
	
	$sql=("INSERT INTO ACHAT(NOM,PRENOM,PANIER,PRIX) VALUES ('$_POST[NOM]','$_POST[PRENOM]','$_POST[PANIER]','$_POST[PRIX]');")
;

	mysqli_query($conn,$sql);
}

?>
