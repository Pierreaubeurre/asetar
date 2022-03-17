<?php

/**
 * Contrôleur de la partie login
 */
function login ()
    {
    global $viewList;
    
    if (!isset($_POST["user"])) echo file_get_contents($viewList["formLogin"]);
    else
        {
        //Partie supérieure page (HEAD + haut du BODY)
        echo file_get_contents($viewList["head"]);
        
        echo file_get_contents($viewList["Accueil"]);

        //Partie inférieure page (bas du BODY + fin HTML)
        //echo file_get_contents($viewList["foot"]);
        }
    }
login();
?>
