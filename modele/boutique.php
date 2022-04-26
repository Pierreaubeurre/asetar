<?php


include "connSQL_modele.php";

$data=array();

function getBoutique() {
    $resultat = array();
    global $data;

    $conn=connexionSQL();
	if ($conn == FALSE)
	{
	echo "Erreur CONNEXION SQL";
	}
	$sql=("SELECT ACHAT.PRIX FROM ACHAT,COMPTE,PROFIL WHERE COMPTE.PSEUDO_U='$_SESSION[utilisateur]' AND PROFIL.PSEUDO_U=COMPTE.PSEUDO_U;");
	$resultat=mysqli_query($conn,$sql);
	
	$data = mysqli_fetch_row($resultat);
    
	
	
	

}

#getInfoProfil("TATA")
?>
