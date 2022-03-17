<?php
include "connSQL_modele.php";

function authentification ($nom,$mdpu)
{
	$conn=connexionSQL();
	if ($conn != FALSE)
	{
	echo "Connexion réussie \n";
	
	}
	else{
		echo "Erreur CONNEXION";
	}
	
	$sql=("SELECT * FROM COMPTE WHERE NOM_U='$nom' AND MDP_U='$mdpu';");
	$result=mysqli_query($conn,$sql);
	
    if (mysqli_affected_rows($conn)===1)
	{
		echo "C'est bon ";
	}
	else
	{
		echo "C'est pas bon";
	}
}
authentification ('TATA','toto');

?>


