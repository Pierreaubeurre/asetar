<?php
include "connSQL.modele.php";

function authentification ($nom,$mdpu)
{
	$conn=connexionSQL();
	if (!$conn)
	{
	echo "=> nik";
	exit(1);
	}
	
	$sql=("SELECT * FROM COMPTE WHERE NOM_U='$nom' AND MDP_U='$mdpu';");
	$result=mysqli_query($conn,$sql);

	if (mysqli_field_count($conn)===0)
	{
		echo "Pas connecté";
	}
	else
	{
		echo "Connecté";
	}
}
authentification ('TATA','toto');

?>


