<?php

include "connSQL_modele.php";

$auth="";

function authentification ($nom,$mdpu)
{
	$conn=connexionSQL();
	if ($conn == FALSE)
	{
	echo "Erreur CONNEXION SQL";
	}
	#var_dump($nom);
	#var_dump($mdpu);

	$sql=("SELECT * FROM COMPTE WHERE PSEUDO_U='$nom' AND MDP_U='$mdpu';");
	$result=mysqli_query($conn,$sql);
	
	#$data = mysqli_fetch_array($result);
    #var_dump($data);
	global $auth;
	#var_dump(mysqli_affected_rows($conn));
    if (mysqli_affected_rows($conn)===1)
	{
		$auth=true;
	}
	else
	{
		$auth=false;
	}
}


?>

