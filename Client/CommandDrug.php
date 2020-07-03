<?php 
		session_start();
		include '../bd.php';

		$region = $_POST['region'];
		$region = htmlspecialchars($region);
		$region = trim($region);
		$region = stripcslashes($region);
		$region = addcslashes($region, "'");
		$region = addcslashes($region, "?");

		$nom_phar = $_POST['nom_phar'];
		$nom_phar = htmlspecialchars($nom_phar);
		$nom_phar = trim($nom_phar);
		$nom_phar = stripcslashes($nom_phar);
		$nom_phar = addcslashes($nom_phar, "'");
		$nom_phar = addcslashes($nom_phar, "?");

		$choix_date = $_POST['choix_date'];
		$choix_date = htmlspecialchars($choix_date);
		$choix_date = trim($choix_date);
		$choix_date = stripcslashes($choix_date);
		$choix_date = addcslashes($choix_date, "'");
		$choix_date = addcslashes($choix_date, "?");

		$payement = $_POST['payement'];
		$payement = htmlspecialchars($payement);
		$payement = trim($payement);
		$payement = stripcslashes($payement);
		$payement = addcslashes($payement, "'");
		$payement = addcslashes($payement, "?");

		$zonel = $_POST['zonel'];
		$zonel = htmlspecialchars($zonel);
		$zonel = trim($zonel);
		$zonel = stripcslashes($zonel);
		$zonel = addcslashes($zonel, "'");
		$zonel = addcslashes($zonel, "?");

		$nom_produit = $_POST['nom_produit'];
		$qte_produit = $_POST['qte_produit'];

		$filename = $_FILES['ordonnance']['name'];
		move_uploaded_file($_FILES['ordonnance']['tmp_name'], './../assets/Uploaded/'.$filename);

		date_default_timezone_set('Africa/Dakar');

		$liste_produit = "";
		$liste_qte     = 0 ;
		for ($i=0; $i < count($nom_produit); $i++) 
		{ 
			$nom_produit[$i] = htmlspecialchars($nom_produit[$i])  ;
			$nom_produit[$i] = trim($nom_produit[$i])              ;
			$nom_produit[$i] = stripcslashes($nom_produit[$i])     ;
			$nom_produit[$i] = addcslashes($nom_produit[$i], "'")  ;
			$nom_produit[$i] = addcslashes($nom_produit[$i], "?")  ;

			$qte_produit[$i] = htmlspecialchars($qte_produit[$i])  ;
			$qte_produit[$i] = trim($qte_produit[$i])              ;
			$qte_produit[$i] = stripcslashes($qte_produit[$i])     ;
			$qte_produit[$i] = addcslashes($qte_produit[$i], "'")  ;
			$qte_produit[$i] = addcslashes($qte_produit[$i], "?")  ;

			$liste_produit   = $liste_produit.$nom_produit[$i].',' ;
			$liste_qte       = $liste_qte.$qte_produit[$i].','     ;
		}

$pdo->query("INSERT INTO commandes VALUES (0,'".$_SESSION['id_c']."','".$liste_produit."','".$liste_qte."','".$region."','".$nom_phar."','".$choix_date."','".date("d-m-Y h:i:s")."','".$payement."','".$filename."','".$zonel."')");
		
?>
<!DOCTYPE html>
<html>
<head>
	<title>Requête en cours de Traitement ...</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="PharmaLiv">
	<meta name="author" content="PharmaVox">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
</head>
<body>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<script type="text/javascript">
				Swal.fire({
				  icon: 'success',
				  title: 'Commande a été enregistrée avec succèss vous serez bientôt mis en relation avec un livreur.',
				  showConfirmButton: true,
				  timer: 7000
				}).then((result)=>
				{
					if (result.isConfirmed) 
					{
						window.location = './command.php';	
					}
				});
				setTimeout(function() {window.location = './command.php';},7000);
	    </script>
</body>
</html>