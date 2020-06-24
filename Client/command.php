<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="PharmaLiv">
	<meta name="author" content="PharmaVox">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
</head>
<body>
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-auto">
					  <img class="rounded-circle" style="height: 140px;width: 140px;" src="../img/form.svg">
				</div>
			</div>
			<div class="row d-flex justify-content-around">
	   			   			<div class="col-md-5 offset-md-1">
	   			   				  <div class="md-form">
	   			   				  		<i class="fas fa-capsules prefix"></i>
	   			   				  		<input id="nom_produit" type="text" name="nom_produit" class="form-control" required>
	   			   				  		<label for="nom_produit">Nom du Produit ...</label>
	   			   				  </div>
	   			   			</div>
	   			   			<div class="col-md-5">
	   			   				   <div class="md-form">
	   			   				  		<i class="fas fa-sort-amount-up prefix"></i>
	   			   				  		<input id="quantité" type="text" name="quantité" class="form-control" required>
	   			   				  		<label for="quantité">Quantité</label>
	   			   				  </div>
							 </div>
			</div>
			<br>
			<div class="col-md-5" style="display: flex;flex-flow: row nowrap;align-items:center;">
	   			   			      <div style="width: 10%;">
	   			   				  		   <i class="fas fa-mortar-pestle "></i>
								  </div>
							       <div style="width: 90%;">
							            <select name="region" id="" class="browser-default custom-select">
								             <option selected>Choix de la Pharmacie</option>
                                             <option value="dakar">Dakar</option>
                                             <option value="thies">Thies</option>
                                             <option value="louga">Louga</option>
                                             <option value="saint-louis">Saint-Louis</option>
                                             <option value="matam">Matam</option>
                                             <option value="sedhiou">Sedhiou</option>
                                             <option value="diourbel">Diourbel</option>
                                             <option value="fatick">fatick</option>
                                             <option value="kaolack">kaolack</option>
                                             <option value="kaffrine">kaffrine</option>
                                             <option value="Tambacounda">Tambacounda</option>
                                             <option value="kedougou">kedougou</option>
                                             <option value="kolda">kolda</option>
                                             <option value="ziguinchor">ziguinchor</option>
										 </select>
									</div>
							  </div>
	   		</div>
	   		<div class="col-md-5" style="display: flex;flex-flow: row nowrap;align-items:center;">
	   			   				   	<div style="width: 10%;">
											 <i class="fas fa-city "></i>
									</div>
	   			   				  	<div style="width: 90%;">
	   			   				  		<select name="region" id="" class="browser-default custom-select">
											 <option selected>Choix de la region</option>
                                             <option value="dakar">Dakar</option>
                                             <option value="thies">Thies</option>
                                             <option value="louga">Louga</option>
                                             <option value="saint-louis">Saint-Louis</option>
                                             <option value="matam">Matam</option>
                                             <option value="sedhiou">Sedhiou</option>
                                             <option value="diourbel">Diourbel</option>
                                             <option value="fatick">fatick</option>
                                             <option value="kaolack">kaolack</option>
                                             <option value="kaffrine">kaffrine</option>
                                             <option value="Tambacounda">Tambacounda</option>
                                             <option value="kedougou">kedougou</option>
                                             <option value="kolda">kolda</option>
                                             <option value="ziguinchor">ziguinchor</option>
                                        </select>
								  </div>
						    </div>
			</div>
			<br>
		    <div class="row d-flex justify-content-around">
	   			   			<div class="col-md-5 offset-md-1">
	   			   				  <div class="md-form">
	   			   				  		<i class="far fa-clock prefix"></i>
	   			   				  		<input id="choix_d" type="text" name="choix_d" class="form-control" required>
	   			   				  		<label for="choix_d">Choix Date de Livraison ...</label>
	   			   				  </div>
	   			   			</div>
	   			   			<div class="col-md-5">
	   			   				   <div class="md-form">
	   			   				  		<i class="far fa-credit-card prefix"></i>
	   			   				  		<input id="moyen_p" type="text" name="moyen_p" class="form-control" required>
	   			   				  		<label for="moyen_p">Moyen de Payement...</label>
	   			   				  </div>
							 </div>

							 <br>
	   			   		 <div class="row d-flex justify-content-center">
								<div class="col-auto">
										<button type="submit" id="command"	 class="btn aqua-gradient" disabled><i class="fas fa-plus"></i>&nbsp;&nbsp;Valider Commande</button>
								</div>
		   			    </div>
			</div>
		<form>
		<!--
			<div class="row d-flex justify-content-around">
				<div class="col-auto">
					  <div class="md-form">
					  		<i class="fas fa-signature prefix"></i>
					  		<input id="nom" type="text" name="nom" class="form-control">
					  		<label for="nom">Entrer le nom ...</label>
					  </div>
				</div>
				<div class="col-auto">
					  <div class="md-form">
					  		<i class="far fa-address-card prefix"></i>
					  		<input id="prenom" type="text" name="prenom" class="form-control">
					  		<label for="prenom">Entrer le prenom ...</label>
					  </div>
				</div>
			</div>
		-->
		</form>
		</div>
	  <script>
		$(function() 
	   			   {
	   			   		$("#choix_d").datepicker(
				  	  	{
				  	  		dateFormat: 'dd-mm-yy'
				  	  	});
	   			   });
	   </script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>
</html>