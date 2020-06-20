<?php 
	include 'bd.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>INSCRIPTION SUR PHARMALIV</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="PharmaLiv">
	<meta name="author" content="PharmaVox">
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
			.width_t
			{
				width: 100%;
			}
			.position_t
			{
				position: relative;
				top: 32px;
				left: 60%;
			}
		}
		@media(min-width: 768px)
		{
			.width_t
			{
				width: 70%;
			}
			.position_t
			{
				position: relative;
				top: 32px;
				left: 85%;
			}
		}
		.myprefix
		{
			color: green !important;
		}
		.myprefix-2
		{
			color: #4285F4 !important;
		}
	</style>
</head>
<body class="bg-light">
	   <?php 
	   		include 'navbar.php';
	   ?>
	   <div class="container alert alert-light width_t">
	   		<form action="f_subscribe.php" action="post">
	   			   <div class="row d-flex justify-content-center align-items-center">
	   			   	<div class="col-auto col-md-6">
	   			   		<i class="fas fa-user prefix position_t"></i>
	   			   	      <select class="browser-default custom-select" onchange="ShowF(this.value);" onclick="HHM(this);">
								<option selected>Profil</option>
								<option value="client">Client</option>
								<option value="pharmacie">Pharmacie</option>					
	   			   		 </select>
	   			   	</div>
	   			   </div>
	   			   <div id="pharmacie_f" style="display: none;">
	   					 <div class="row d-flex justify-content-center">
	   			   			<div class="col-auto">

	   			   			</div>
	   			   		</div>	
	   			   </div>
	   			   <div id="client_f" style="display: none;">
	   			   	<br>
	   			   		 <div class="row d-flex justify-content-center">
			   			   	<div class="col-auto">
			   			   	      <button type="button" class="btn aqua-gradient rounded-pill">Civilté</button>
			   			   	</div>
	   			   		 </div>	
	   			   	    <div class="row d-flex justify-content-between">
	   			   			<div class="col-5 offset-1">
	   			   				  <div class="md-form">
	   			   				  		<i class="fas fa-signature prefix"></i>
	   			   				  		<input id="nom_c" type="text" name="nom_c" class="form-control">
	   			   				  		<label for="nom_c">Nom ...</label>
	   			   				  </div>
	   			   			</div>
	   			   			<div class="col-5">
	   			   				   <div class="md-form">
	   			   				  		<i class="far fa-address-book prefix"></i>
	   			   				  		<input id="prenom_c" type="text" name="prenom_c" class="form-control">
	   			   				  		<label for="prenom_c">Prenoms ...</label>
	   			   				  </div>
	   			   			</div>
	   			   		</div>	
	   			   		<div class="row d-flex justify-content-between">
	   			   			<div class="col-5 offset-1">
	   			   					<div class="md-form">
	   			   				  		<i class="fas fa-phone prefix"></i>
	   			   				  		<input id="telephone_c" type="text" name="telephone_c" class="form-control">
	   			   				  		<label for="telephone_c">Telephone ...</label>
	   			   				  </div>
	   			   			</div>
	   			   			<div class="col-5">
		   			   			<div class="md-form">
		   			   				  		<i class="fas fa-calendar-alt prefix"></i>
		   			   				  		<input id="DatedeNaissance_c" type="text" name="DatedeNaissance_c" class="form-control">
		   			   				  		<label for="DatedeNaissance_c">Date de naissance...</label>
		   			   			</div>
		   			   		</div>
	   			   		</div>
	   			   		<br>
	   			   			<div class="row d-flex justify-content-center">
			   			   	<div class="col-auto">
			   			   	      <button type="button" class="btn peach-gradient rounded-pill">INFORMATION PERSONNELLES</button>
			   			   	</div>
	   			   		 </div>	
	   			   		<div class="row d-flex justify-content-start">
	   			   			<div class="col-5 offset-1">
	   			   					<div class="md-form">
	   			   				  		<i class="fas fa-envelope prefix"></i>
	   			   				  		<input id="mail_c" type="text" name="mail_c" class="form-control">
	   			   				  		<label for="mail_c">Mail...</label>
	   			   				  </div>
	   			   			</div>
	   			   		</div>
	   			   		<div class="row d-flex justify-content-start">
	   			   			<div class="col-5 offset-1">
	   			   					<div class="md-form">
	   			   				  		<i class="fas fa-transgender prefix position_t" id="sexxxx"></i>
	   			   				  		<select class="browser-default custom-select" onchange="DisplayF(this.value);" onclick="HHM(this);">
												<option selected>Sexe</option>
												<option value="homme">HOMME</option>
												<option value="femme">FEMME</option>
												<option value="nope">NON PRECISE</option>						
					   			   		</select>
	   			   				  	</div>
	   			   			</div>
	   			   			<div class="col-5 offset-1" style="display: none;" id="moree">
	   			   					<div class="md-form">
	   			   				  		<select class="browser-default custom-select" onchange="DisplayFi(this.value);">
												<option selected>Statut ...</option>
												<option value="homme">ENCEINTE</option>
												<option value="femme">ALLAITANT UN BEBE</option>
												<option value="nope">AUCUN</option>						
					   			   		</select>
	   			   				  	</div>
	   			   			</div>
	   			   		</div>
	   			   		<div class="row d-flex justify-content-start">
	   			   			<div class="col-5 offset-1">
	   			   					<div class="md-form">
	   			   				  		<i class="fas fa-envelope prefix"></i>
	   			   				  		<input id="infcompl_c" type="text" name="infcompl_c" class="form-control">
	   			   				  		<label for="infcompl_c">Information Complementaire...</label>
	   			   				  </div>
	   			   			</div>
	   			   		</div>
	   			   </div>
	   			   <div class="row d-flex justify-content-center">
	   			   	<div class="col-auto">
	   			   			<button type="submit" style="display: none;" class="btn aqua-gradient" disabled><i class="fas fa-plus"></i>&nbsp;&nbsp;Inscription</button>
	   			   	</div>
	   			   </div>
	   		</form>	
	   </div>
	   <script type="text/javascript">
	   			function ShowF(profil) 
	   			{
	   				if (profil==='client') 
	   				{
	   					document.getElementById('pharmacie_f').style.display        = 'none'    ;
	   					document.getElementById('client_f').style.display           = 'inline'  ;
	   					document.querySelector("button[type=submit]").style.display = 'inline'  ;

	   					let x = document.getElementById('pharmacie_f').querySelectorAll("input");

	   					for (let i = x.length - 1; i >= 0; i--) 
	   					{
	   					 	x[i].disabled = true ;	
	   					} 

	   					x = document.getElementById('client_f').querySelectorAll("input");

	   					for (let i = x.length - 1; i >= 0; i--) 
	   					{
	   					 	x[i].disabled = false ;	
	   					} 	
	   				}	
	   				else
	   				{
	   					if (profil==='pharmacie') 
		   				{
		    				document.getElementById('client_f').style.display           = 'none'    ;
		   					document.getElementById('pharmacie_f').style.display        = 'inline'  ;
		   					document.querySelector("button[type=submit]").style.display = 'inline'  ;

		   					let x = document.getElementById('client_f').querySelectorAll("input")   ;

		   					for (let i = x.length - 1; i >= 0; i--) 
		   					{
		   					 	x[i].disabled = true ; 	
		   					} 	 


		   					x = document.getElementById('pharmacie_f').querySelectorAll("input");

		   					for (let i = x.length - 1; i >= 0; i--) 
		   					{
		   					 	x[i].disabled = false ;	
		   					} 
		   				}
		   				else
		   				{
		   					document.querySelector("button[type=submit]").style.display = 'none'    ;
		   					document.querySelector("button[type=submit]").disabled      = true      ;
		   					document.getElementById('client_f').style.display           = 'none'    ;
		   					document.getElementById('pharmacie_f').style.display        = 'none'    ;
		   				}
	   				}

	   				$(function () 
	   				{
	   					$("input[type=text]").focusin(function () 
	   					{
	   						focusInput(this.id);
	   					})			

	   					$("input[type=text]").focusout(function () 
	   					{
	   						OutfocusInput(this.id);
	   					})
	   				});
	   			}

	   			function focusInput(arg) 
				   {
					 	let input = document.getElementById(arg)  ;
					 	let inI   = input.parentElement           ;
					 	input.classList.add("border")			  ;
					  	input.classList.add("border-success")     ;
					  	input.classList.add("border-top-0")       ;
					  	input.classList.add("border-right-0")     ;
					  	input.classList.add("border-left-0")      ;

					  	inI.querySelector("i").classList.remove("myprefix-2");
					  	inI.querySelector("i").classList.add("myprefix");
				   }

				   function OutfocusInput(arg) 
				   {
					   	let input = document.getElementById(arg)    ;
					   	let inI   = input.parentElement             ;
					   	input.classList.remove("border")			;
				    	input.classList.remove("border-success")    ;
				    	input.classList.remove("border-top-0")      ;
				    	input.classList.remove("border-right-0")    ;
				    	input.classList.remove("border-left-0")     ;

				    	inI.querySelector("i").classList.remove("myprefix");
				    	inI.querySelector("i").classList.add("myprefix-2");
				   }

				   function DisplayF(arg) 
				   {
				   		if (arg==="femme")
				   		{
				   			document.getElementById('moree').style.display = 'inline'     ;
				   			document.querySelector("button[type=submit]").disabled = true ;
				   		}
				   		else
				   		{
				   			if (arg==="Sexe") 
				   			{
				   				document.querySelector("button[type=submit]").disabled = true    ;
				   				document.getElementById('moree').style.display = 'none'   		 ;
				   			}
				   			else
				   			{
				   			  	document.querySelector("button[type=submit]").disabled = false   ;
				   			  	document.getElementById('moree').style.display = 'none'   		 ;
				   			}
				   		}
				   }

				   function HHM(arg) 
	   			   {
	   						let theI = arg.parentElement.querySelector("i");

	   						theI.style.color = 'green';
	   			   }

	   			   function DisplayFi(arg) 
	   			   {
	   			   		if (arg!="Statut ...") 
	   			   		{
	   			   			document.querySelector("button[type=submit]").disabled  = false     ;
	   			   		}
	   			   		else
	   			   		{
	   			   			document.querySelector("button[type=submit]").disabled  = true      ;
	   			   		}
	   			   }
	   </script>
</body>	
</html>