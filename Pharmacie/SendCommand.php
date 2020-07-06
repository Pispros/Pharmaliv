<?php 
	session_start();
	include '../bd.php';

    $pdo->query("INSERT INTO pending_commands VALUES (0,'','".$_POST['id_p']."','".$_POST['id_c']."','".$_POST['zonel']."','".$_POST['nom_p']."','".$_POST['qte_p']."','".$_POST['date_c']."','".$_POST['date_liv']."','".$_POST['photo_o']."',0)");

    $pdo->query("DELETE FROM commandes WHERE ID='".$_POST['id_command']."'")
?>
<script type="text/javascript">
		localStorage.setItem("c_success","OK") ;
		window.location = './ListeCommande.php';
</script>