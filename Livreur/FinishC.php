<?php 
	session_start()    ;
	include '../bd.php';

	if ($_SESSION['profffil']!='Livreur') 
	{
?>
		<script type="text/javascript">
				  window.location = './../' ;
		</script>
<?php 
	}

	$query = $pdo->query("SELECT status FROM pending_commands WHERE ID='".$_POST['id_command']."'");
	$status= $query->fetchAll(PDO::FETCH_NUM);

	if($status[0][0]==0) 
	{
		$pdo->query("UPDATE pending_commands SET ID_livreur='".$_SESSION['id_l']."' WHERE ID='".$_POST['id_command']."'");
		$pdo->query("UPDATE pending_commands SET status=1 WHERE ID='".$_POST['id_command']."'");
?>
		<script type="text/javascript">
				localStorage.setItem("care","OK");
				window.location = './';
		</script>
<?php 
	}
	else
	{
?>
		<script type="text/javascript">
				localStorage.setItem("care","nope");
				window.location = './';
		</script>
<?php 
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>FINALISATION</title>
</head>
<body>

</body>
</html>