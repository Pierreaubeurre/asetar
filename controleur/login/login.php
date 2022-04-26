<?php

/**
 * Contrôleur de la partie login
 */
 
 
require_once "modele/authentification_modele.php";//Appel le modele pour l'authentification

if (isset ($_POST['user']) and isset ($_POST['password']))
{
$_SESSION["utilisateur"]=($_POST['user']);
	#$_POST["password"]=hash('gost',$_POST["password"]);
	authentification ($_POST['user'],$_POST['password']);//Fonction qui authentifie, change la valeur de $auth
}



 
function login ()
    {
    global $vueListe,$auth;
    
    if ($auth==false) echo file_get_contents($vueListe["formLogin"]);
    else
        {
        //Partie supérieure page (HEAD + haut du BODY)
        //echo file_get_contents($vueListe["entete"]);
        echo file_get_contents($vueListe["accueilDeco"]);

        //Partie inférieure page (bas du BODY + fin HTML)
        //echo file_get_contents($viewList["foot"]);
        
        }
    }
?>

