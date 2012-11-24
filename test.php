<?php
//phpinfo();
include("classes/Mysql.php");
include("classes/Utilisateur.php");

$bdd = new Mysql();
//$bdd->set_serveur("localhost");
$bdd->set_login("joomla");
$bdd->set_mdp("joomla");
$bdd->set_bdd("tp5");
$bdd->connexion();
if ($bdd->get_cnx())
	print "Connexion bdd OK";
/*$res = $bdd->requete("INSERT INTO tp5.utilisateur (nom) VALUES ('bbb');");
if ($res)
	print "ok";
else
	print "erreur :" . mysql_error();
	
mysql_query("INSERT INTO tp5.utilisateur (nom) VALUES ('cccc');");*/

/*$u = new Utilisateur();
$u->set_nom("Ali");
$u->set_prenom("ben saleh");
$u->set_mail("ali@ali.com");
$u->set_d_naissance("01/02/2015");
$u->set_mdp("1234");*/
?>