<?php

/**
 * Contrôleur de la partie login
 */

function testConnexion ()
    {
        var_dump($_POST);
        include "/var/www/html/asetar08/modele_test/authentification_modele.php"; //insertion du fichier de connexion mariadb
        if (isset($_POST['username']) && isset($_POST['password']))
            {
                $id=$_POST['username']; //variable qui va contenir le nom d'utilisateur
                $mdp=$_POST['password']; //variable qui va contenir le mot  de passe de l'utilisateur
                try
                {
                    authentification($id,$mdp); //utilisation de la fonction du fichier authentification_model.php
                }
                catch (Exception $e)
                {
                    var_dump($e);
                }
                finally
                {
                    echo file_get_contents("/var/www/html/asetar08/Asetar08/Entête/Header.html"); //redirection vers la page d'accueil du site asetar08
                }
                
            }
        else
            {

                echo file_get_contents("/var/www/html/asetar08/Asetar08/MotDePasse/MotDePasse.html"); //redirection vers la page de connexion (erreur)
            }
    }

testConnexion($id,$mdp); //test de la connexion
var_dump($_POST);
?>