<?php
$lifetime=30;
session_set_cookie_params($lifetime);
session_start();

require_once "init/init.php";

if(isset($_GET["page"])) 
{
	$page=$_GET["page"];
}
else 
{
	$page="accueil"; //sinon page d'accueil par défaut
}


mainControl($page);
?>
