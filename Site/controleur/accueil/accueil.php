<?php


function affAccueil()
{
    global $vueListe;
    echo file_get_contents($vueListe["accueil"]);

}
?>

