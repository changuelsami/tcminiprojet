<?php
	include("../inc/connexion.php");
	include("../classes/Utilisateur.php");
	$u = new Utilisateur();
	$u->set_nom($_REQUEST['nom']);
	$u->set_prenom($_REQUEST['prenom']);
	$u->set_mail($_REQUEST['mail']);
	$u->set_d_naissance($_REQUEST['d_naissance']);
	$u->set_mdp($_REQUEST['mdp']);
	
	if ($u->enregistrer($bdd))
		print "Ajout ok";
?>