<?php
include("../inc/connexion.php");
include("../classes/Utilisateur.php");
$u = new Utilisateur();
$users = $u->get_liste($bdd, 'nom');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>

<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td><strong>Nom</strong></td>
    <td><strong>Prénom</strong></td>
    <td><strong>Mail</strong></td>
    <td><strong>Modifier</strong></td>
    <td><strong>Supprimer</strong></td>
  </tr>
  <?php
  $user = new Utilisateur();
  foreach($users as $user )
  {
 ?>
  <tr>
    <td><?php echo $user->get_nom(); ?></td>
    <td><?php echo $user->get_prenom(); ?></td>
    <td><?php echo $user->get_mail(); ?></td>
    <td><a href="utilisateur_modif.php?id=<?php echo $user->get_id(); ?>">MOD</a></td>
    <td>SUPP</td>
  </tr>
	<?php
  }
  ?>
</table>
</body>
</html>