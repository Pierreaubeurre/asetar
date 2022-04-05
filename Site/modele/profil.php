<?php


include "connSQL_modele.php";

$data=array();

function getInfoProfil($nom) {
    $resultat = array();
    global $data;
    #global $resultat;
    $conn=connexionSQL();
	if ($conn == FALSE)
	{
	echo "Erreur CONNEXION SQL";
	}
	$sql=("SELECT P.* FROM PROFIL P, COMPTE C WHERE C.PSEUDO_U='$nom' AND C.ID_U=P.ID_U;");
	$resultat=mysqli_query($conn,$sql);
	
	$data = mysqli_fetch_array($resultat);
    #var_dump($data);
    
	
	
	

}

#getInfoProfil("TATA")
?>
