<?php


function affAccueil()
{
    global $vueListe;
    if(isset ($_SESSION["utilisateur"]))
    {
        echo file_get_contents($vueListe["accueilDeco"]);
    }
    else
    {
    echo file_get_contents($vueListe["accueil"]);
    }
}
?>

