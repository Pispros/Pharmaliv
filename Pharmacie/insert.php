<?php 
	include '../bd.php';

	$pdo->query("INSERT INTO pharmacie VALUES (0,'dakar','GUIGON','nom_gerant','GUIGON@gmail.com','adresse','tel','".password_hash('passer', PASSWORD_DEFAULT)."')");
	$pdo->query("INSERT INTO pharmacie VALUES (0,'dakar','GAMBETTA','nom_gerant','GAMBETTA@gmail.com','adresse','tel','".password_hash('passer', PASSWORD_DEFAULT)."')");
	$pdo->query("INSERT INTO pharmacie VALUES (0,'dakar','ROLLAND','nom_gerant','ROLLAND@gmail.com','adresse','tel','".password_hash('passer', PASSWORD_DEFAULT)."')");
	$pdo->query("INSERT INTO pharmacie VALUES (0,'dakar','GUEDIAWAYE','nom_gerant','GUEDIAWAYE@gmail.com','adresse','tel','".password_hash('passer', PASSWORD_DEFAULT)."')");
	$pdo->query("INSERT INTO pharmacie VALUES (0,'dakar','TERANGA','nom_gerant','TERANGA@gmail.com','adresse','tel','".password_hash('passer', PASSWORD_DEFAULT)."')");

	$pdo->query("INSERT INTO pharmacie VALUES (0,'thies','BABYLONE','nom_gerant','BABYLONE@gmail.com','adresse','tel','".password_hash('passer', PASSWORD_DEFAULT)."')");
	$pdo->query("INSERT INTO pharmacie VALUES (0,'thies','COULANGE','nom_gerant','COULANGE@gmail.com','adresse','tel','".password_hash('passer', PASSWORD_DEFAULT)."')");
	$pdo->query("INSERT INTO pharmacie VALUES (0,'thies','KARAFA','nom_gerant','KARAFA@gmail.com','adresse','tel','".password_hash('passer', PASSWORD_DEFAULT)."')");
	$pdo->query("INSERT INTO pharmacie VALUES (0,'thies','MADELAINE','nom_gerant','MADELAINE@gmail.com','adresse','tel','".password_hash('passer', PASSWORD_DEFAULT)."')");
	$pdo->query("INSERT INTO pharmacie VALUES (0,'thies','MARGOUS','nom_gerant','MARGOUS@gmail.com','adresse','tel','".password_hash('passer', PASSWORD_DEFAULT)."')");

	$pdo->query("INSERT INTO pharmacie VALUES (0,'sl','PASCALINE','nom_gerant','PASCALINE@gmail.com','adresse','tel','".password_hash('passer', PASSWORD_DEFAULT)."')");
	$pdo->query("INSERT INTO pharmacie VALUES (0,'sl','PIKINOISE','nom_gerant','PIKINOISE@gmail.com','adresse','tel','".password_hash('passer', PASSWORD_DEFAULT)."')");
	$pdo->query("INSERT INTO pharmacie VALUES (0,'sl','PODOR','nom_gerant','PODOR@gmail.com','adresse','tel','".password_hash('passer', PASSWORD_DEFAULT)."')");
	$pdo->query("INSERT INTO pharmacie VALUES (0,'sl','PRINCIPAL','nom_gerant','PRINCIPAL@gmail.com','adresse','tel','".password_hash('passer', PASSWORD_DEFAULT)."')");
	$pdo->query("INSERT INTO pharmacie VALUES (0,'sl','SOGUI','nom_gerant','SOGUI@gmail.com','adresse','tel','".password_hash('passer', PASSWORD_DEFAULT)."')");
?>