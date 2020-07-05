<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title>CONSOLE D'ADMINISTRATION</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="PharmaLiv">
	<meta name="author" content="ninjamer">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/js/mytreecss.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
	<style type="text/css">
		*
		{
			color: black;
		}
	</style>
</head>
<body>
		<?php include 'navbar.php'; ?>
		<div class="_layout_">
			<div class="inner_sidebar">
				   <br>
				   <div class="expandBtn">
						  <i class="fas fa-angle-right rounded-circle bg-success" id="_display_menu"></i>
					</div>
					<div id="logo" style="display: none;">
						  <img class="rounded-circle" style="width:100px;height: 100px;background-color: white;" src="../img/4.svg">
					</div>
					<hr>
				  <?php include 'tree.php'; ?>
			</div>
			<div class="inner_content">
				<iframe id="frameset" src="home.php" style="width: 100%;height: 100%;border: unset;"></iframe>
			</div>		
		</div>
		<script type="text/javascript" src="../assets/js/mytreejs.js"></script>
		<script type="text/javascript">
				function AlterPage(arg) 
				{
					document.getElementById('frameset').src = arg ;
				}
		</script>
</body>
</html>