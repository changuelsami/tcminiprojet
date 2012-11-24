<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>

<body>
<p>Nouvel utilisateur</p>
<form id="form1" name="form1" method="post" action="utilisateur_ajout_action.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="22%">Nom</td>
      <td width="78%"><input type="text" name="nom" id="nom" /></td>
    </tr>
    <tr>
      <td>Prénom</td>
      <td><input type="text" name="prenom" id="prenom" /></td>
    </tr>
    <tr>
      <td>Mail</td>
      <td><input type="text" name="mail" id="mail" /></td>
    </tr>
    <tr>
      <td>Mot de passe</td>
      <td><input type="text" name="mdp" id="mdp" /></td>
    </tr>
    <tr>
      <td>Date de naissance</td>
      <td><input type="text" name="d_naissance" id="d_naissance" /> 
        jj/mm/aaaa</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Envoyer" /></td>
    </tr>
  </table>
  <p></p>
</form>
<p>&nbsp;</p>
</body>
</html>