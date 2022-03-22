<?php

/**
 * Contrôleur de la partie login
 */
function login ()
    {
    global $vueListe;
    
    if (!isset($_POST["user"])) echo file_get_contents($vueListe["formLogin"]);
    else
        {
        //Partie supérieure page (HEAD + haut du BODY)
        echo file_get_contents($vueListe["entete"]);
        
        echo file_get_contents($vueListe["accueil"]);

        //Partie inférieure page (bas du BODY + fin HTML)
        //echo file_get_contents($viewList["foot"]);
        
        
        }
    }
?>

