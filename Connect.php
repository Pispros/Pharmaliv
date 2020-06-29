<?php 
	session_start();
	include 'bd.php'		     ;
	$action = $_REQUEST['action'];
	$ok     = 0;

	if ($action=='connect')
	{
		$login = $_REQUEST['login'];
		$pwd   = $_REQUEST['pwd']  ;

		$login = htmlspecialchars($login);
		$login = stripcslashes($login)   ;
		$login = trim($login)            ;

		$pwd = htmlspecialchars($pwd);
		$pwd = stripcslashes($pwd)   ;
		$pwd = trim($pwd)            ;

		$query = $pdo->query("SELECT * FROM users WHERE login='".$login."'");
		$nrow  = $query->rowCount();

		if ($nrow>0) 
		{

			$rows = $query->fetchAll(PDO::FETCH_NUM);

			$password_hash = $rows[0][2];	

			$verify = password_verify($pwd, $password_hash);

			if ($verify == 1) 
			{
				$_SESSION['profffil'] = 'Client'   ;
				$_SESSION['id_c']     = $rows[0][0];
				$_SESSION['nom']      = $rows[0][4];
				$_SESSION['prenom']   = $rows[0][5];
?>
				<script type="text/javascript">
						 window.location = './Client/' ;
				</script>
<?php 
			}
		}
		else
		{
			$query = $pdo->query("SELECT * FROM pharmacie WHERE mail='".$login."'");
			$nrow  = $query->rowCount();

			if ($nrow>0) 
			{
				$rows = $query->fetchAll(PDO::FETCH_NUM);

				$password_hash = $rows[0][7];	

				$verifyP = password_verify($pwd, $password_hash);

				if ($verifyP == 1) 
				{
					$_SESSION['profffil'] = 'Pharmacie' ;
					$_SESSION['id_p']     = $rows[0][0];
					$_SESSION['nom']      = $rows[0][2];
					$_SESSION['mail']     = $rows[0][4];
	?>
					<script type="text/javascript">
							 window.location = './Pharmacie/' ;
					</script>
	<?php 
				}
				else
				{
	?>
					<script type="text/javascript">
							 alert("Login ou Password incorrect. Ou vous n'avez pas de compte !?");
							 window.location = './'
					</script>
	<?php  
				}
			}
			else
			{
?>
				<script type="text/javascript">
					 alert("Login ou Password incorrect. Ou vous n'avez pas de compte !?");
					 window.location = './'
				</script>
<?php  
			}
		}
	}
	else
	{
		include 'mailtosubscribe.php';
	}
?>