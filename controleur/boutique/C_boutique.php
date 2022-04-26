<?php


include_once "modele/boutique.php";

if (isset ($_POST['user']))
{
getInfoProfil($_POST['user']);
}



function afficheBoutique ()
    {
    global $vueListe,$data;
    
        
    	$vue = file_get_contents($vueListe["boutique"]);
	require_once "modele/boutique.php";

	getBoutique();
	
	$final=0;
	
	if (empty($data))
	{
		$vue=str_replace("%1"."R", "$final",$vue);
    }
	
	else
	{
	for ($i = 0;$i < count($data); $i++)//Permet de lire le tableau envoyé pour le modèle et de remplacer dans le html
	{
        $final=$data[$i]+$final;
		$vue=str_replace("%1"."R", "$final",$vue);
	}
	}
	
	echo $vue;//Action final correspondant à l'affichage du html
}

function modifPanier() 
{
	if ($_POST!=null)
	{
		require_once "modele/modifPanier_modele.php";
		modifPanier();
	}	
}
    

if (!isset ($_SESSION["utilisateur"]))//vérifie si le user est connecté , redirige sur login si non
{
	include_once "controleur/profile/js/pasco.php";
}

?>
