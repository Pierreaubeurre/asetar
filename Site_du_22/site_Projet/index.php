<?php
require_once "init/init.php";

if(isset($_POST["login"])) $page=$_GET["login"];
else $page="accueil"; //sinon page d'accueil par défaut

mainControl($page);
?>
