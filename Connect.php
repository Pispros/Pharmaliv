<?php 
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
		$nrow  = $pdo->rowCount();

		if ($nrow>0) 
		{
			$rows = $query->fetchAll(PDO::FETCH_NUM);

			$password_hash = $row[0][2];	

			if (password_verify($pwd, $password_hash)) 
			{
				$ok = 1;
			}
			else
			{
				$ok = 0;
			}
		}
		else
		{
?>
			<script type="text/javascript">
					 alert("Vous n'avez pas de compte !");
					 window.location = './'
			</script>
<?php  
		}
	}
	else
	{
		include 'mailtosubscribe.php';
	}
?>