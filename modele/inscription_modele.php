<?php

require_once "connSQL_modele.php";

function inscription ($post)
{
	$conn=connexionSQL();
	if ($conn == FALSE)
	{
	echo "Erreur CONNEXION SQL";
	}
	
	mysqli_query($conn,"INSERT INTO PROFIL (NOM,PRENOM,PSEUDO_U,LANGUE,DATE_NAISSANCE,TEL,MAIL) 
VALUES ($post)");//Envoie la requete avec l'information récupéré en POST
}


?>
