<?php 

function deco ()
    {
    global $vueListe;
    session_destroy();
    echo file_get_contents($vueListe["accueil"]);
    }



?> 
