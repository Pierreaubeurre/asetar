<?php

function connexionSQL() {
    $login = "Admin";
    $mdp = "1234";
    $bd = "BD_ASETAR";
    $serveur = "localhost";
    
    $conn = mysqli_connect("localhost",$login,$mdp,$bd);
    return $conn;
}

?>
