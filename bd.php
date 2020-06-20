<?php 
	  $pdo = new PDO("mysql:host=localhost;dbname=pharmaliv;","root","passer");
	  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)           ;     
?>