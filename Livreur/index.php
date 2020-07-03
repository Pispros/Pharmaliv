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

	$action = "";
	if (isset($_REQUEST['action'])) 
	{
		$action = $_REQUEST['action'];
	}
	else
	{
		$action = 'new';
	}

	if($action=='new') 
	{
		$query = $pdo->query("SELECT * FROM pending_commands WHERE zone_livraison='".$_SESSION['myZoneL']."' AND status=0 ORDER BY ID ASC");
		$rows  = $query->fetchAll(PDO::FETCH_NUM);
		$ndis  = $query->rowCount();
	}

	if($action=='finished') 
	{
		$query = $pdo->query("SELECT * FROM pending_commands WHERE zone_livraison='".$_SESSION['myZoneL']."' AND status=1 ORDER BY ID DESC");
		$rows  = $query->fetchAll(PDO::FETCH_NUM);
		$ndis  = $query->rowCount();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LIVREUR PHARMALIV</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="PharmaLiv">
	<meta name="author" content="ninjamer">
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
	<style type="text/css">
		@media(max-width: 767px)
		{
			.container
			{
				width: 100%;
				font-size: 20px;
				text-align: center;
			}
			.row p
			{
				padding-top: 20px;
				padding-left: 25px;
			}
			._job h3
		    {
		    	font-size: 20px;
		      	text-align: center;
		      	color: white;
		      	font-weight: bold;
		      	font-weight: bolder;
		    }
		}
		@media(min-width: 768px)
		{
			.container
			{
				width: 70%;
				font-size: 30px;
				text-align: center;
			}
			.row p
			{
				padding-top: 20px;
				padding-left: 30px;
			}
			._job h3
		    {
		    	font-size: 25px;
		      	text-align: center;
		      	color: white;
		      	font-weight: bold;
		      	font-weight: bolder;
		    }
		}
		@media(min-width: 992px)
		{
			.container
			{
				width: 50%;
				font-size: 30px;
				text-align: center;
			}
			.row p
			{
				padding-top: 20px;
				padding-left: 30px;
			}
			._job h3
		    {
		    	font-size: 25px;
		      	text-align: center;
		      	color: white;
		      	font-weight: bold;
		      	font-weight: bolder;
		    }
		}
		._notif
      {
        display: flex;align-items: center;
        justify-content: center;
        color: white;
        width: 50px;
        height: 50px;
        padding-top: 6px;
        margin-left: 25px;
        font-weight: bold;
      }
      ._job 
      {
      	cursor: pointer;
      	margin-top: 20px;
      }
      #_display_infos p
      {
        text-align: center;
        font-family: 'Anton', sans-serif;
        font-size: 25px;
        margin-top: 35px;
      }
	</style>
</head>
<body class="bg-light">
		<?php 
			include 'navbar.php';
		?>
		<br>
		<div style="display: flex;justify-content: center;">
            <button style="width: 250px;height: 30px;background-color: rgba(76, 175, 80, 0.7);color: white;" id="waiting" onclick="window.location = './?action=new';">Disponibles</button>
            <button style="width: 250px;height: 30px;background-color: rgba(244, 67, 54, 0.7);color: white;" id="completed" onclick="window.location = './?action=finished';">Terminées</button>
        </div>
        <br>
	 	<div class="container alert alert-light">
	 		<input type="hidden" id="test_" value="<?php echo $action ?>">
	 		<div class="row">
	 			<div class="col-12 d-flex justify-content-center align-items-center">
	 				<p>Commandes 
	 				  <?php 
	 				  	if ($action=='new') 
	 				  	{
	 				  		echo " Disponibles";
	 				  	}

	 				  	if ($action=='finished') 
	 				  	{
	 				  		echo " Terminées";
	 				  	} 
	 				  ?>
	 				</p>
	 				  <div>
               			    <div class="rounded-circle bg-danger _notif"><h6 style="font-weight: bolder;"><?php echo $ndis; ?></h6></div>
	 				  </div>
	 			</div>
	 		</div>
	 		  <?php 
	 		  		$tab_colors = ["rgba-blue-strong","rgba-red-strong","rgba-purple-strong","rgba-indigo-strong","rgba-green-strong","amber darken-3","rgba-black-strong"];
	 		  		foreach ($rows as $row) 
	 		  		{
	 		  			$job_color = random_int(0, 6);

	 		  			$query = $pdo->query("SELECT nom,prenom,tel FROM users WHERE ID='".$row[3]."'");
                        $rowc  = $query->fetchAll(PDO::FETCH_NUM);

                        $query = $pdo->query("SELECT nom_pharm,nom_gerant,tel FROM pharmacie WHERE ID='".$row[2]."'");
                        $rowp  = $query->fetchAll(PDO::FETCH_NUM);
	 		  ?>
	 		  			<div class="_job alert alert-light <?php echo $tab_colors[$job_color]; ?> hoverable" data-toggle="modal" data-target="#basicExampleModal" infos_c="<?php echo $rowc[0][0].' '.$rowc[0][1].' - '.$rowc[0][2]; ?>" infos_p="<?php echo $rowp[0][0].' - '.$rowp[0][2]; ?>" gerant="<?php echo $rowp[0][1]; ?>" commandes="<?php echo $row[5]; ?>" quantites="<?php echo $row[6]; ?>" id_comm="<?php echo $row[0]; ?>" dateL="<?php echo $row[8]; ?>" onclick="DisplayInfos(this);">
	 		  				 <h3><?php echo "#$row[0]() -----> $row[7]"; ?></h3>
	 		  			</div>
	 		  <?php 
	 		  		}
	 		  ?>
	 	</div>
<div class="modal fade alert alert-light" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header table-success">
        <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">INFORMATIONS COMMANDE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<form method="post" action="FinishC.php">
      <div class="modal-body">
    	<div id="_display_infos">
    		 <p id="noms"></p>
    		 <p id="inf_p"></p>
    		 <p id="infos_produit"></p>
    	</div>
      </div>
      <div class="modal-footer">
      	<input type="hidden" name="id_command" id="id_command">
        <button type="button" class="btn btn-success" data-dismiss="modal">FERMER</button>
        <button  type="submit" class="btn btn-danger" id="new_btn">S'en Occuper</button>
      </div>
</form>
    </div>
  </div>
</div> 
 		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
 		<script type="text/javascript">
            if (localStorage.getItem("care")==="OK") 
            {
              Swal.fire({
              icon: 'success',
              title: 'Super vous pouvez vous charger de la commande ...',
              showConfirmButton: true,
              timer: 3000
                        });
              localStorage.removeItem("care");
            }

            if (localStorage.getItem("care")==="nope") 
            {
              Swal.fire({
              icon: 'error',
              title: 'Cette tâche a déjà été assignée ! Soyez plus rapide la prochaine fois ...',
              showConfirmButton: true,
              timer: 3000
                        });
              localStorage.removeItem("care");
            }

			function EraseAll(DivId) 
            {
                let x = document.getElementById(DivId).querySelectorAll("p");
                for (var i = x.length - 1; i >= 0; i--) 
                {
                  x[i].remove();
                }

                let newP    = document.createElement("p");
                let newP1   = document.createElement("p");
                let newP2   = document.createElement("p");
                let newP3   = document.createElement("p");
                newP.setAttribute("id","noms")           ;
                newP2.setAttribute("id","inf_p")         ;
                newP1.setAttribute("id","infos_produit") ;
             
                document.getElementById(DivId).appendChild(newP) ;
                document.getElementById(DivId).appendChild(newP2);
                document.getElementById(DivId).appendChild(newP1);
            }

              function DisplayInfos(arg) 
              {
                  EraseAll("_display_infos");

                  let infos_c   = arg.getAttribute('infos_c')             ;
                  let commandes = arg.getAttribute('commandes').split(',');
                  let qtes      = arg.getAttribute('quantites').split(',');

                  document.getElementById('noms').innerHTML   = infos_c   ;

                  let newP    = document.createElement("p");
                  let content = document.createTextNode("Pharmacie : "+arg.getAttribute('infos_p'));
                  newP.appendChild(content);
                  document.getElementById('inf_p').appendChild(newP);

                  newP    = document.createElement("p");
                  content = document.createTextNode("Nom Gérant : "+arg.getAttribute('gerant'));
                  newP.appendChild(content);
                  document.getElementById('inf_p').appendChild(newP);

                  newP    = document.createElement("p");
                  content = document.createTextNode("Date Limite Livraison : "+arg.getAttribute('dateL'));
                  newP.appendChild(content);
                  document.getElementById('inf_p').appendChild(newP);

                  newP    = document.createElement("p");
                  content = document.createTextNode("-----------------------------");
                  newP.appendChild(content);
                  document.getElementById('inf_p').appendChild(newP);

                  for (let i =0 ; i <= commandes.length-1; i++) 
                  {
                    if (commandes[i]!="," && commandes[i]!=undefined && commandes[i]!="") 
                    {
                      newP    = document.createElement("p");
                      content = document.createTextNode((i+1)+"/ "+commandes[i]+"  ---->  "+qtes[i]);

                      newP.appendChild(content);
                      document.getElementById('infos_produit').appendChild(newP);
                    }
                  }

                  document.getElementById('id_command').value = arg.getAttribute('id_comm');

                  if (document.getElementById('test_').value == 'finished') 
                  {
                  	  document.getElementById('new_btn').style.display = 'none';
                  	  document.getElementById('new_btn').disabled      = true;
                  }
                  else
                  {
                  	  document.getElementById('new_btn').style.display = 'inline';
                  	  document.getElementById('new_btn').disabled      = false;
                  }
                //document.getElementById('zone_livraison').innerHTML = "Zone Livraison : "+arg.getAttribute("zone");
              }
		</script>
</body>
</html>