<?php


include_once "connSQL_modele.php";

$data=array();

function getInfoProfil() {
    $resultat = array();
    global $data;

    $conn=connexionSQL();
	if ($conn == FALSE)
	{
	echo "Erreur CONNEXION SQL";
	}
	$sql=("SELECT P.* FROM PROFIL P, COMPTE C WHERE C.PSEUDO_U='$_SESSION[utilisateur]' AND C.ID_U=P.ID_U;");
	$resultat=mysqli_query($conn,$sql);
	
	$data = mysqli_fetch_row($resultat);
    
	
	
	

}

#getInfoProfil("TATA")
?>
