<?php


include_once "modele/profil.php";

if (isset ($_POST['user']))
{
getInfoProfil($_POST['user']);
}



function afficheProfile ()
    {
    global $vueListe,$data;
    
    //echo file_get_contents($vueListe["profile"]);
    
    #var_dump($data);
    
    include $vueListe["profile"];
    }
?>
