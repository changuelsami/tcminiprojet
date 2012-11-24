<?php
class Utilisateur
{
	private $_id;
	private $_nom;
	private $_prenom;
	private $_mail;
	private $_mdp;
	private $_d_naissance;
	
	public function set_nom($s)
	{
		if (strlen($s) == 0)
			exit("Utilisateur : le nom est obligatoire");
		$this->_nom = $s;
	}
	
	public function set_prenom($s)
	{
		$this->_prenom = $s;
	}
	
	public function set_mail($s)
	{
		if (strlen($s) == 0)
			exit("Utilisateur : le mail est obligatoire");
		$this->_mail = $s;
	}
	
	public function set_mdp($s)
	{
		if ($s == "")
			$s = "1234";
		/*
		$arr = str_split('ABCDEFGHIJKLMNOP'); // get all the characters into an array
		shuffle($arr); // randomize the array
		$arr = array_slice($arr, 0, 6); // get the first six (random) characters out
		$str = implode('', $arr); // smush them back into a string
		*/
		if (strlen($s) < 4 || strlen($s) > 15)
			exit("Utilisateur : le mdp doit être compris entre 4 et 15 caractères");
		$this->_mdp = $s;
	}
	
	public function set_d_naissance($s) // format d'entrés : jj/mm/aaaa
	{
		$this->_d_naissance = $s;
	}

	public function set_id($x) // format d'entrés : jj/mm/aaaa
	{
		$this->_id = $x;
	}
	
	public function get_id() { return $this->_id; }
	public function get_nom() { return $this->_nom; }
	public function get_prenom() { return $this->_prenom; }
	public function get_mail() { return $this->_mail; }
	public function get_mdp() { return $this->_mdp; }
	public function get_d_naissance() { return $this->_d_naissance; }
	
	public function enregistrer(Mysql $bdd)
	{
		$q = "INSERT INTO utilisateur 
			  VALUES (null, '$this->_nom',' $this->_prenom', 
			  		  '$this->_mail', '$this->_mdp', '$this->_d_naissance')";
		return $bdd->requete($q);
	}
	
	public function get_un($bdd, $id)
	{
		$q = "SELECT * FROM utilisateur WHERE id='$id'";
		$res = $bdd->requete($q);
		$row = mysql_fetch_array($res);
		
		$u = new Utilisateur();
		$u->set_d_naissance($row['d_naissance']);
		$u->set_id($row['id']);
		$u->set_mail($row['mail']);
		$u->set_mdp($row['mdp']);
		$u->set_nom($row['nom']);
		$u->set_prenom($row['prenom']);
		return $u;
	}

	public function get_liste($bdd, $order_by='id', $order_type='ASC')
	{
		$q = "SELECT * FROM utilisateur ORDER BY $order_by $order_type";
		$res = $bdd->requete($q);
		while($row = mysql_fetch_array($res))
		{
			$u = new Utilisateur();
			$u->set_d_naissance($row['d_naissance']);
			$u->set_id($row['id']);
			$u->set_mail($row['mail']);
			$u->set_mdp($row['mdp']);
			$u->set_nom($row['nom']);
			$u->set_prenom($row['prenom']);
			
			$a_user[] = $u;
		}
		return $a_user;
	}
	
}
?>