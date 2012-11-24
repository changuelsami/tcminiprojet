<?php
include("../classes/Mysql.php");

$bdd = new Mysql();
$bdd->set_serveur("localhost");
$bdd->set_login("joomla");
$bdd->set_mdp("joomla");
$bdd->set_bdd("tp5");
$bdd->connexion();
?>