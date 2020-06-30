<?php 
	session_start();

	if ($_SESSION['profffil']!='Client') 
	{
?>
		<script type="text/javascript">
				  window.location = './../' ;
		</script>
<?php 
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PharmaLiv</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="PharmaLiv">
	<meta name="author" content="PharmaVox">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
	<style type="text/css">

			.ninja_info_card
			{
				width: 20%;
				height: 67vh;
				margin-left: 5px;
				background-color: #eeeeee;
			}

			.container-fluid
			{
				display: flex;
				flex-flow: row wrap;
			}

			.body-space
			{
				width: 78%;
				height: 80vh;
				border-radius: 10px;
			}

			iframe
			{
				width: 100%;
				height: 100%;
				border : unset;
			}
	</style>
</head>
<body class="">
		<?php include 'navbar.php'; ?>
	<div class="container-fluid">
		<div class="ninja_info_card alert alert-dark">
			   <?php include 'infos.php'; ?>
		</div>
		<div class="body-space">
			  <iframe id="frame" src="command.php"></iframe>
		</div>
	</div>
	<script type="text/javascript">
			 function AlterPage(arg) 
			 {
			 	document.getElementById('frame').src = arg ;
			 }
	</script>
</body>
</html>