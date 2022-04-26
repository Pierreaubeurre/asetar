<?php
global $vueListe;
echo file_get_contents($vueListe["inscription"]);

require_once "modele/inscription_modele.php";

#if (isset ($_POST["password"]))//Verifie l'existence du post "password", évite une erreur
#{
#	$_POST["password"]=hash('gost',$_POST["password"]);
#}

$post=("'".(implode ("','",$_POST))."'") ;//Récupère les POST et les met sous la bonne forme
	
echo $post;
inscription($post);
?>
