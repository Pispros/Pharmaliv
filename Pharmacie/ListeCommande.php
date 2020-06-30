<?php 
	session_start() ;
	include '../bd.php';

	$query    = $pdo->query("SELECT ID,ID_client,nom_produit FROM commandes WHERE ID_pharmacie='".$_SESSION['id_p']."'") ;
	$rows_new = $query->fetchAll(PDO::FETCH_NUM);

	$query = $pdo->query("SELECT ID,ID_client,nom_produit FROM pending_commands WHERE ID_pharmacie='".$_SESSION['id_p']."'") ;
	$rows_com = $query->fetchAll(PDO::FETCH_NUM);
?>
<!DOCTYPE html>
<html>
<head>
	<title>COMMANDES</title>
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
	</style>
</head>
<body>
<div class="container-fluid">
	   	<div style="display: flex;justify-content: center;">
            <button style="width: 250px;height: 30px;background-color: white;" id="waiting" onclick="DisplayIt('not');">En attente</button>
            <button style="width: 250px;height: 30px;background-color: white;" id="completed" onclick="DisplayIt('yup');">Complets</button>
            <i class="fas fa-sync-alt fa-2x" id="refreshi" class="view hoverable" style="margin-left:5%;cursor: poi" title="Actualiser" onclick="location.reload();"></i>
        </div>
<div id="waiting_table" style="display: none;">

       <div class="row d-flex justify-content-center">
           <div class="col-12 col-md-7">
               <input type="hidden" id="type" value="<?php echo $type; ?>">
               <div class="md-form">
                  <input type="text" id="search" class="form-control">
                  <label for="search">Rechercher ...</label>
               </div>
           </div>
        </div>

    	<div class="row"> 
            <div class="col-auto offset-1 d-flex justify-content-center">
			  <table class="table table-hover table-responsive">
			  		  <thead class="green lighten-4">
			  		  	<tr>
				  		  <th width="50px"><center>#</center></th>
	                      <th width="400px"><center>NOM CLIENT</center></th>
	                      <th width="400px"><center>PRODUIT</center></th>
			  		  	</tr>
			  		  </thead>
              <tbody id="myTable">
                      <?php 
                          $count = 1 ;
                          foreach ($rows_new as $row) 
                          {
                            $query = $pdo->query("SELECT nom,prenom FROM users WHERE ID='".$row[1]."'");
                            $rowc  = $query->fetchAll(PDO::FETCH_NUM);
                      ?>
                            <tr data-toggle="modal" data-target="#basicExampleModal">
                                 <td>
                                      <center style="margin-top:15px;"><?php echo $count; ?></center>
                                 </td>
                                 <td>
                                      <center style="margin-top:15px;"><?php echo $rowc[0][0].' '.$rowc[0][1]; ?></center>
                                 </td>
                                 <td>
                                      <center style="margin-top:15px;"><?php echo $row[2]; ?></center> 
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
	                      <th width="400px"><center>NOM CLIENT</center></th>
	                      <th width="400px"><center>PRODUIT</center></th>
			  		  	</tr>
			  </thead>
              <tbody id="myTable2">
                      <?php 
                          $count2 = 1 ;
                          foreach ($rows_com as $row) 
                          {
                            $query = $pdo->query("SELECT nom,prenom FROM users WHERE ID='".$row[1]."'");
                            $rowc  = $query->fetchAll(PDO::FETCH_NUM);
                      ?>
                            <tr data-toggle="modal" data-target="#basicExampleModal">
                                 <td>
                                      <center style="margin-top:15px;"><?php echo $count; ?></center>
                                 </td>
                                 <td>
                                      <center style="margin-top:15px;"><?php echo $rowc[0][0].' '.$rowc[0][1]; ?></center>
                                 </td>
                                 <td>
                                      <center style="margin-top:15px;"><?php echo $row[2]; ?></center> 
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
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INFORMATIONS COMMANDE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Yooo
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">FERMER</button>
        <button type="button" class="btn btn-primary" id="new_btn">OK</button>
      </div>
    </div>
  </div>
</div>
	   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
       <script type="text/javascript">
              
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

              if (localStorage.getItem("latest_window")=='') 
              {
                 DisplayIt('not');
              }
              else
              {
                DisplayIt(localStorage.getItem("latest_window")); 
              }
        </script>
</div>
</body>
</html>