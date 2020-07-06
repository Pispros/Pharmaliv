<?php 
	session_start();
	include 'bd.php';
	$type = $_REQUEST['for'];

	if ($type=='pharmacie') 
	{
		$nom_p = $_POST['nom_p'];
		$nom_p = htmlspecialchars($nom_p);
		$nom_p = trim($nom_p);
		$nom_p = stripcslashes($nom_p);
		$nom_p = addcslashes($nom_p, "'");
		$nom_p = addcslashes($nom_p, "?");

		$nom_g = $_POST['nom_g'];
		$nom_g = htmlspecialchars($nom_g);
		$nom_g = trim($nom_g);
		$nom_g = stripcslashes($nom_g);
		$nom_g = addcslashes($nom_g, "'");
		$nom_g = addcslashes($nom_g, "?");

		$telephone_p = $_POST['telephone_p'];
		$telephone_p = htmlspecialchars($telephone_p);
		$telephone_p = trim($telephone_p);
		$telephone_p = stripcslashes($telephone_p);
		$telephone_p = addcslashes($telephone_p, "'");
		$telephone_p = addcslashes($telephone_p, "?");

		$adresse_p = $_POST['adresse_p'];
		$adresse_p = htmlspecialchars($adresse_p);
		$adresse_p = trim($adresse_p);
		$adresse_p = stripcslashes($adresse_p);
		$adresse_p = addcslashes($adresse_p, "'");
		$adresse_p = addcslashes($adresse_p, "?");

		$mail_p = $_POST['mail_p'];
		$mail_p = htmlspecialchars($mail_p);
		$mail_p = trim($mail_p);
		$mail_p = stripcslashes($mail_p);
		$mail_p = addcslashes($mail_p, "'");
		$mail_p = addcslashes($mail_p, "?");

		$pwd_p = $_POST['pwd_p'];
		$pwd_p = htmlspecialchars($pwd_p);
		$pwd_p = trim($pwd_p);
		$pwd_p = stripcslashes($pwd_p);
		$pwd_p = addcslashes($pwd_p, "'");
		$pwd_p = addcslashes($pwd_p, "?");

		$pdo->query("INSERT INTO pharmacie VALUES (0,'".$nom_p."','".$nom_g."','".$mail_p."','".$adresse_p."','".$telephone_p."','".password_hash($pwd_p, PASSWORD_DEFAULT)."')");
?>
			<script type="text/javascript">
					let account_type = "new";
					localStorage.setItem('acc',account_type);
					window.location = './';
			</script>
<?php 
	}
	if ($type=='client') 
	{
		$nom_c = $_POST['nom_c'];
		$nom_c = htmlspecialchars($nom_c);
		$nom_c = trim($nom_c);
		$nom_c = stripcslashes($nom_c);
		$nom_c = addcslashes($nom_c, "'");
		$nom_c = addcslashes($nom_c, "?");

		$prenom_c = $_POST['prenom_c'];
		$prenom_c = htmlspecialchars($prenom_c);
		$prenom_c = trim($prenom_c);
		$prenom_c = stripcslashes($prenom_c);
		$prenom_c = addcslashes($prenom_c, "'");
		$prenom_c = addcslashes($prenom_c, "?");

		$telephone_c = $_POST['telephone_c'];
		$telephone_c = htmlspecialchars($telephone_c);
		$telephone_c = trim($telephone_c);
		$telephone_c = stripcslashes($telephone_c);
		$telephone_c = addcslashes($telephone_c, "'");
		$telephone_c = addcslashes($telephone_c, "?");

		$DatedeNaissance_c = $_POST['DatedeNaissance_c'];
		$DatedeNaissance_c = htmlspecialchars($DatedeNaissance_c);
		$DatedeNaissance_c = trim($DatedeNaissance_c);
		$DatedeNaissance_c = stripcslashes($DatedeNaissance_c);
		$DatedeNaissance_c = addcslashes($DatedeNaissance_c, "'");
		$DatedeNaissance_c = addcslashes($DatedeNaissance_c, "?");

		$mail_c = $_POST['mail_c'];
		$mail_c = htmlspecialchars($mail_c);
		$mail_c = trim($mail_c);
		$mail_c = stripcslashes($mail_c);
		$mail_c = addcslashes($mail_c, "'");
		$mail_c = addcslashes($mail_c, "?");

		$pwd = $_POST['pwd'];
		$pwd = htmlspecialchars($pwd);
		$pwd = trim($pwd);
		$pwd = stripcslashes($pwd);
		$pwd = addcslashes($pwd, "'");
		$pwd = addcslashes($pwd, "?");

		$sexe_c = $_POST['sexe_c'];
		$sexe_c = htmlspecialchars($sexe_c);
		$sexe_c = trim($sexe_c);
		$sexe_c = stripcslashes($sexe_c);
		$sexe_c = addcslashes($sexe_c, "'");
		$sexe_c = addcslashes($sexe_c, "?");

		$statut = $_POST['statut'];
		$statut = htmlspecialchars($statut);
		$statut = trim($statut);
		$statut = stripcslashes($statut);
		$statut = addcslashes($statut, "'");
		$statut = addcslashes($statut, "?");

		$aler = $_POST['aler'];
		$aler = htmlspecialchars($aler);
		$aler = trim($aler);
		$aler = stripcslashes($aler);
		$aler = addcslashes($aler, "'");
		$aler = addcslashes($aler, "?");

		$infcompl_c = $_POST['infcompl_c'];
		$infcompl_c = htmlspecialchars($infcompl_c);
		$infcompl_c = trim($infcompl_c);
		$infcompl_c = stripcslashes($infcompl_c);
		$infcompl_c = addcslashes($infcompl_c, "'");
		$infcompl_c = addcslashes($infcompl_c, "?");
		
		$pdo->query("INSERT INTO users VALUES (0,'".$mail_c."','".password_hash($pwd, PASSWORD_DEFAULT)."','','".$nom_c."','".$prenom_c."','".$telephone_c."','".$DatedeNaissance_c."','".$sexe_c."','".$statut."','".$infcompl_c."')");
?>
			<script type="text/javascript">
					let account_type = "new";
					localStorage.setItem('acc',account_type);
					window.location = './';
			</script>
<?php
	}

	if ($type=='livreur') 
	{

			
?>
			<script type="text/javascript">
					let account_type = "new";
					localStorage.setItem('acc',account_type);
					window.location = './';
			</script>
<?php
	}
?>
