<?php 
	session_start() ;
	include '../bd.php';

	$query = $pdo->query("SELECT nom_pharm,nom_gerant,mail FROM pharmacie");

	$rows  = $query->fetchAll(PDO::FETCH_NUM)  ;
?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="icon" type="image/png" href="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="jep">
  <meta name="author" content="ninjamer">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>
</head>
<body>
	<div class="row" style="position: fixed;bottom: 55%;right: 50%;">
         <div class="col-auto">
               <h1><a href=""><i class="fas fa-plus-circle" title="Ajouter un utilisateur" style="color: green;"></i></a></h1>
         </div>
  </div>

		<div class="container">
			<div class="row">
	  		</div>
	  		<br>
	  		<div class="row d-flex justify-content-center">
	  			  <div class="col-auto">
	  			  		<h3><i class="fas fa-user-nurse"></i>&nbsp;Liste des Pharmacies</h3>
	  			  </div>
	  		</div>
	  		<br><br>
			<div class="d-flex justify-content-center">
			<table class="table-responsive table-hover">
			<tr>
				<td width="250px"><center>Nom</center></td>
				<td width="250px"><center>Nom Gérant</center></td>
				<td width="250px"><center>Login</center></td>
				<td width="350px"></td>
			</tr>
			<?php  
				$i=0;
				foreach ($rows as$row)
				{ 
					if ($i%2) 
					{
						$type_row = "table-secondary";
					}
					else
					{
						$type_row = "table-primary";	
					}
			?>
				<tr>
					<td>
						<div class="<?php echo $type_row; ?>">
							<center><?php echo $row[0]; ?></center>
						</div>
					</td>
					<td>
						<div class="<?php echo $type_row; ?>">
							<center><?php echo $row[1]; ?></center>
						</div>
					</td>
					<td>
						<div class="<?php echo $type_row; ?>">
							<center><?php echo $row[2]; ?></center>
						</div>
					</td>
					<td  width="">
						<div class="<?php echo $type_row; ?>">
							<div class="d-flex justify-content-center">
							<a style="" href="">[Supprimer]</a><a href="">&nbsp;&nbsp;[Modifier]</a>
							</div>
						</div>
					</td>
				</tr>
			<?php
				$i++;}
			?>
			</table>
			</div>
			
		</div>
</body>
</html>