<?php 
	session_start() ;
	include '../bd.php';

	$query    = $pdo->query("SELECT ID,ID_client,nom_produit,quantite_produit,zone_livraison,date_commande,date_livraison,photo_ordonnance FROM commandes WHERE ID_pharmacie='".$_SESSION['id_p']."' ORDER BY ID ASC") ;
	$rows_new = $query->fetchAll(PDO::FETCH_NUM);
  $notif = $query->rowCount();

	$query = $pdo->query("SELECT ID,ID_client,nom_produit,quantite_produit,zone_livraison,date_commande,ID_livreur,date_livraison,photo_ordonnance FROM pending_commands WHERE ID_pharmacie='".$_SESSION['id_p']."' AND status=1 ORDER BY ID DESC") ;
	$rows_com = $query->fetchAll(PDO::FETCH_NUM);
?>
<!DOCTYPE html>
<html>
<head>
	<title>COMMANDES</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="PharmaLiv">
	<meta name="author" content="ninjamer">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
	<style type="text/css">
			.options button
			{
				width: 200px;
				height: 27px;

				background-color: white;
			}
			table
			{
				width: auto;
			}
			tr
			{
				cursor: pointer;
			}
      p
      {
        text-align: center;
        margin-top: 30px;   
        font-family: 'Anton', sans-serif;
        font-size: 25px;
      }
      #_display_infos
      {
        border: dotted;   
      }
      #_display_infos p:last-child
      {
        margin-bottom: 30px;
      }
      ._notif
      {
        display: flex;align-items: center;
        justify-content: center;
        color: white;
        width: 25px;
        height: 25px;
        padding-top: 6px;
        margin-left: 10px;
        font-weight: bold;
        position: relative;
        right:  20px;
        bottom: 10px;
      }
	</style>
</head>
<body>
<div class="container-fluid">
	   	<div style="display: flex;justify-content: center;">
            <button style="width: 250px;height: 30px;background-color: white;" id="waiting" onclick="DisplayIt('not');">En attente</button>
            <button style="width: 250px;height: 30px;background-color: white;" id="completed" onclick="DisplayIt('yup');">Complets</button>
            <i class="fas fa-sync-alt fa-2x" id="refreshi" class="view hoverable" style="margin-left:5%;cursor: pointer" title="Actualiser" onclick="location.reload();"></i>
      </div>
<div id="waiting_table" style="display: none;">

       <div class="row d-flex justify-content-around">
           <div class="col-8 col-md-5">
               <input type="hidden" id="type" value="<?php echo $type; ?>">
               <div class="md-form">
                  <input type="text" id="search" class="form-control">
                  <label for="search">Rechercher ...</label>
               </div>
           </div>
           <div class="col-2 d-flex align-self-center">
                <i class="far fa-bell fa-2x"></i>
                <div class="rounded-circle bg-danger _notif"><h6><?php echo $notif; ?></h6></div>
           </div>     
        </div>

    	<div class="row"> 
            <div class="col-auto offset-1 d-flex justify-content-center">
			  <table class="table table-hover table-responsive">
			  		  <thead class="green lighten-4">
			  		  	<tr>
				  		  <th width="50px"><center>#</center></th>
	                      <th width="250px"><center>NOM CLIENT</center></th>
	                      <th width="250px"><center>PRODUIT</center></th>
                        <th width="250px"><center>DATE DE COMMANDE</center></th>
			  		  	</tr>
			  		  </thead>
              <tbody id="myTable">
                      <?php 
                          $count = 1 ;
                          foreach ($rows_new as $row) 
                          {
                            $query = $pdo->query("SELECT nom,prenom,tel FROM users WHERE ID='".$row[1]."'");
                            $rowc  = $query->fetchAll(PDO::FETCH_NUM);

                            $liste_commande = explode(',', $row[2]);
                      ?>
                            <tr data-toggle="modal" data-target="#basicExampleModal" id="<?php echo $row[0]; ?>" nom="<?php echo $rowc[0][0]; ?>" prenom="<?php echo $rowc[0][1]; ?>" tel="<?php echo $rowc[0][2]; ?>" commandes="<?php echo $row[2]; ?>" quantites="<?php echo $row[3]; ?>" zone="<?php echo $row[4]; ?>" id_p="<?php echo $_SESSION['id_p']; ?>" id_c="<?php echo $row[1]; ?>" date_c="<?php echo $row[5]; ?>" dateL="<?php echo $row[6]; ?>" ORD="<?php echo $row[7]; ?>" onclick="DisplayInfos(this,'magicalModal')">
                                 <td>
                                      <center style="margin-top:15px;"><?php echo $count; ?></center>
                                 </td>
                                 <td>
                                      <center style="margin-top:15px;"><?php echo $rowc[0][0].' '.$rowc[0][1]; ?></center>
                                 </td>
                                 <td>
                                      <center style="margin-top:15px;">
                                      	<?php if(count($liste_commande)<=2)
                                      				echo $row[2];
                                      		  else 
                                      		  		echo "Commande multiple"; 
                                      	?>
                                      </center> 
                                 </td>
                                 <td>
                                      <center style="margin-top:15px;"><?php echo $row[5]; ?></center>
                                 </td>
                            </tr>
                      <?php
                            $count++; 
                          }
                      ?>
              </tbody>
			 </table>
			</div>
        </div>
</div>

<div id="completed_table" style="display: none;">

      <div class="row d-flex justify-content-center">
           <div class="col-12 col-md-7">
               <input type="hidden" id="type" value="<?php echo $type; ?>">
               <div class="md-form">
                  <input type="text" id="search2" class="form-control">
                  <label for="search2">Rechercher ...</label>
               </div>
           </div>
      </div> 

      <div class="row">   
        	<div class="col-auto offset-1 d-flex justify-content-center">
        	 <table class="table table-hover table-responsive">
              <thead class="green lighten-4">
			  		  	<tr>
				  		  <th width="50px"><center>#</center></th>
	                      <th width="250px"><center>NOM CLIENT</center></th>
	                      <th width="250px"><center>PRODUIT</center></th>
                        <th width="250px"><center>DATE DE COMMANDE</center></th>
			  		  	</tr>
			  </thead>
              <tbody id="myTable2">
                      <?php 
                          $count2 = 1 ;
                          foreach ($rows_com as $row) 
                          {
                            $query = $pdo->query("SELECT nom,prenom,tel FROM users WHERE ID='".$row[1]."'");
                            $rowc  = $query->fetchAll(PDO::FETCH_NUM);

                            $query = $pdo->query("SELECT nom,prenom,tel FROM livreur WHERE ID='".$row[6]."'");
                            $rowl  = $query->fetchAll(PDO::FETCH_NUM);

                            $liste_commande = explode(',', $row[2]);
                      ?>
                            <tr data-toggle="modal" data-target="#basicExampleModal" nom="<?php echo $rowc[0][0]; ?>" prenom="<?php echo $rowc[0][1]; ?>" commandes="<?php echo $row[2]; ?>" tel="<?php echo $rowc[0][2]; ?>" quantites="<?php echo $row[3]; ?>" zone="<?php echo $row[4]; ?>" id_p="<?php echo $_SESSION['id_p']; ?>" id_c="<?php echo $row[1]; ?>" date_c="<?php echo $row[5]; ?>" livreur="<?php echo $rowl[0][0].' '.$rowl[0][1]; ?>" numL="<?php echo $rowl[0][2]; ?>" dateL="<?php echo $row[7]; ?>" ORD="<?php echo $row[8]; ?>" onclick="DisplayInfos(this,'JustShow')">
                                 <td>
                                      <center style="margin-top:15px;"><?php echo $count; ?></center>
                                 </td>
                                 <td>
                                      <center style="margin-top:15px;"><?php echo $rowc[0][0].' '.$rowc[0][1]; ?></center>
                                 </td>
                                 <td>
                                      <center style="margin-top:15px;">
                                        <?php if(count($liste_commande)<=2)
                                              echo $row[2];
                                            else 
                                                echo "Commande multiple"; 
                                        ?>
                                      </center> 
                                 </td>
                                 <td>
                                     <center style="margin-top:15px;"><?php echo $row[5]; ?></center>
                                 </td>
                            </tr>
                      <?php
                            $count++;
                            $count2++; 
                          }
                      ?>
              </tbody>
             </table>
      		</div>
</div>
</div></div>
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
<form method="post" action="SendCommand.php">
      <div class="modal-body">
    	<div id="_display_infos">
    		  <p id="noms"></p>
          <p id="telephoneC"></p>
        	<p id="infos_produit"></p>
          <p id="zone_livraison"></p>
    	</div>
      </div>
      <div class="modal-footer">
        <input type="hidden" name="id_p"       id="id_p"    >
        <input type="hidden" name="id_c"       id="id_c"    >
        <input type="hidden" name="zonel"      id="zonel"   >
        <input type="hidden" name="nom_p"      id="nom_p"   >
        <input type="hidden" name="qte_p"      id="qte_p"   >
        <input type="hidden" name="date_c"     id="date_c"  >
        <input type="hidden" name="id_command" id="id_com"  >
        <input type="hidden" name="date_liv"   id="date_liv">
        <input type="hidden" name="photo_o"    id="photo_o" >
        <button type="button" class="btn btn-success" data-dismiss="modal">FERMER</button>
        <button  type="submit" class="btn blue-gradient" id="new_btn">Commissionner un Livreur</button>
      </div>
</form>
    </div>
  </div>
</div>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
       <script type="text/javascript">
              if (localStorage.getItem("c_success")==="OK") 
              {
                Swal.fire({
                icon: 'success',
                title: 'Commande partagée avec success avec les livreurs de la zone',
                showConfirmButton: true,
                timer: 3000
                          });
                localStorage.removeItem("c_success");
              }

              function DisplayIt(arg) 
              { 
                let waiting_btn     = document.getElementById('waiting')        ;
                let completed_btn   = document.getElementById('completed')      ;
                let completed_table = document.getElementById('completed_table');
                let waiting_table   = document.getElementById('waiting_table')  ;
                let refreshable     = document.getElementById('refreshi')       ;

                if (arg == 'not') 
                { 
                    completed_table.style.display       = 'none'                  ;
                    waiting_table.style.display         = 'inline'                ;
                    refreshable.style.color             = "rgba(255, 152, 0, 0.7)";

                    completed_btn.style.borderColor     = "rgba(255, 152, 0, 0.3)";
                    waiting_btn.style.borderColor       = "rgba(255, 152, 0, 0.3)";
                    completed_btn.style.color           = "black"                 ;
                    completed_btn.style.backgroundColor = "white"                 ;
                    waiting_btn.style.backgroundColor   = "rgba(255, 152, 0, 0.7)";
                    waiting_btn.style.color             = "white"                 ;

                    localStorage.setItem("latest_window", "not")                  ;
                }
                else
                {
                    waiting_table.style.display         = 'none'                  ;
                    completed_table.style.display       = 'inline'                ;
                     refreshable.style.color            = "rgba(76, 175, 80, 0.7)";

                    completed_btn.style.borderColor     = "rgba(76, 175, 80, 0.3)";
                    waiting_btn.style.borderColor       = "rgba(76, 175, 80, 0.3)";
                    waiting_btn.style.color             = "black"                 ;
                    waiting_btn.style.backgroundColor   = "white"                 ;
                    completed_btn.style.backgroundColor = "rgba(76, 175, 80, 0.7)";
                    completed_btn.style.color           = "white"                 ;

                    localStorage.setItem("latest_window", "yup")                  ;
                }
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
                newP.setAttribute("id","noms")                ;
                newP1.setAttribute("id","infos_produit")      ;
                newP2.setAttribute("id","zone_livraison")     ;
                newP3.setAttribute("id","telephoneC")         ;

                document.getElementById(DivId).appendChild(newP) ;
                document.getElementById(DivId).appendChild(newP3);
                document.getElementById(DivId).appendChild(newP1);
                document.getElementById(DivId).appendChild(newP2);
              }

              function DisplayInfos(arg,magicalModal) 
              {
                  EraseAll("_display_infos");

                  let nom       = arg.getAttribute('nom')                 ;
                  let prenom    = arg.getAttribute('prenom')              ;
                  let tel       = arg.getAttribute('tel')                 ;
                  let commandes = arg.getAttribute('commandes').split(',');
                  let qtes      = arg.getAttribute('quantites').split(',');

                  document.getElementById('noms').innerHTML       = nom+' '+prenom    ;
                  document.getElementById('telephoneC').innerHTML = 'Téléphone : '+tel;

                  newP    = document.createElement("p");
                  content = document.createTextNode("Date Limite Livraison : "+arg.getAttribute('dateL'));
                  newP.appendChild(content);
                  document.getElementById('telephoneC').appendChild(newP);

                  newP     = document.createElement("p");
                  content0 = document.createElement("a");
                  content  = document.createElement("button");
                  content0.setAttribute("target","_blank");
                  content0.setAttribute("href","../assets/Uploaded/"+arg.getAttribute('ORD'));
                  content.setAttribute("class","btn aqua-gradient");
                  content.setAttribute("type","button");

                  content.appendChild(document.createTextNode("Ordonnance"));
                  content0.appendChild(content);
                  newP.appendChild(content0);
                  document.getElementById('infos_produit').appendChild(newP);

                  newP    = document.createElement("p");
                  content = document.createTextNode("-----------------------------");
                  newP.appendChild(content);
                  document.getElementById('telephoneC').appendChild(newP);

                  for (let i =0 ; i <= commandes.length; i++) 
                  {
                    if (commandes[i]!="," && commandes[i]!=undefined && commandes[i]!="") 
                    {
                      let newP    = document.createElement("p");
                      let content = document.createTextNode((i+1)+"/ "+commandes[i]+"  ---->  "+qtes[i]);

                      newP.appendChild(content);
                      document.getElementById('infos_produit').appendChild(newP);
                    }
                  }

                document.getElementById('zone_livraison').innerHTML = "Zone Livraison : "+arg.getAttribute("zone");

                document.getElementById('id_p').value     = arg.getAttribute('id_p')     ;
                document.getElementById('id_c').value     = arg.getAttribute('id_c')     ;
                document.getElementById('zonel').value    = arg.getAttribute('zone')     ;
                document.getElementById('nom_p').value    = arg.getAttribute('commandes');
                document.getElementById('qte_p').value    = arg.getAttribute('quantites');
                document.getElementById('date_c').value   = arg.getAttribute('date_c')   ;
                document.getElementById('id_com').value   = arg.id                       ;
                document.getElementById('date_liv').value = arg.getAttribute('dateL')    ;
                document.getElementById('photo_o').value  = arg.getAttribute('ORD')      ;

                if (magicalModal==="JustShow") 
                {
                  newP    = document.createElement("p");
                  content = document.createTextNode("Livreur : "+arg.getAttribute('livreur'));

                  newP.appendChild(content);
                  document.getElementById('infos_produit').appendChild(newP);

                  newP    = document.createElement("p");
                  content = document.createTextNode("Numéro Livreur : "+arg.getAttribute('numL'));

                  newP.appendChild(content);
                  document.getElementById('infos_produit').appendChild(newP);

                  document.getElementById('new_btn').style.display = "none" ;
                  document.getElementById('new_btn').disabled      = true   ;
                }
                else
                {
                   document.getElementById('new_btn').style.display = "inline" ;
                   document.getElementById('new_btn').disabled      = false    ;
                }
              }

              if (localStorage.getItem("latest_window")=='') 
              {
                 DisplayIt('not');
              }
              else
              {
                DisplayIt(localStorage.getItem("latest_window")); 
              }

              $(document).ready(function(){
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
              $(document).ready(function(){
  $("#search2").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable2 tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
        </script>
</div>
</body>
</html>