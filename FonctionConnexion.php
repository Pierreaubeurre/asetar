#!/usr/bin/php
<?php

$mysqli = mysqli_connect('localhost', 'THEO', '123456', 'BD_PUF'); 
function connexionMariaDB($mysqli)
    {
    $mysqli = mysqli_connect($serveur, $user, $password, $bd);
        {
        if (!$mysqli)           // (Si erreur : arrêt du prog.)
            {
            echo "=> Désolé, l'accès au SGBD n'est pas possible :(";
            exit(1);
            }
        }
    }

function execSQL($sql, $mysqli)
    {
        $result = mysqli_query($mysqli, $sql);
        return $result;
    }

function ExtractSQL($result, $mysqli)
    {
        if(mysqli_field_count($mysqli)==0)
        {
            return array(); //Tableau Vide.
        }
        else
        {
            $tableau = array();
            while($ligne = mysqli_fetch_assoc($result))
            {
                $tableau[]=$ligne;
            }
            return($tableau);
        }
    }
   
?>