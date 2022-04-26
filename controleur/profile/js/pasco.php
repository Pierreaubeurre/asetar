<?php

/*

Fichier js

Remarque:

Ce fichier js redirige l'utilisateur vers la page de connexion si il n'est pas encore connecté


Fonction du controleur:

-Redirige l'utilisateur vers la page de connexion
-Affiche l'alerte "Vous devez vous connecter pour accéder à cette option"

*/

echo "
	<script>
	window.alert('Vous devez vous connecter pour accéder à cette option');
	window.location.href = '?page=connexion';
	</script>";

?>
