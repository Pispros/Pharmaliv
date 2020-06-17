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
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
	<style type="text/css">
		.showModal
		{
			display: inline;
			z-index: 10;
			position: absolute;
			top: 25%;
			left: 25%;
		}
		.hideModal
		{	
			z-index: -1;
			display: none;
		}
		h4
		{
			font-family: 'Dancing Script', cursive;
		}
		.activeOption
		{

		}
		@media(max-width: 767px)
		{
			.container
			{
				width: 90%;
				margin-top: 1%;
			}
		}

		@media(min-width: 768px)
		{
			.container
			{
				width: 70%;
				margin-top: 1%;
			}
		}
		@media(min-width: 992px)
		{
			.container
			{
				width: 45%;
				margin-top: 2%;
			}
		}
		.myprefix
		{
			color: green !important;
		}
	</style>
</head>
<body class="bg-light">
		<?php include 'navbar.php'; ?>
		<div class="container alert alert-light">
			<div class="row">
				<div class="col-6 d-flex justify-content-center" id="signin_row" style="cursor: pointer;" onclick="DisplayMenuOption('Auth')">
					  <h4 style="color: black;">Connexion</h4>
				</div>
				<div class="col-6 d-flex justify-content-center" id="signup_row" style="cursor: pointer;" onclick="DisplayMenuOption('abra')">
					<h4 style="color: black;">S'inscrire</h4>
				</div>		
			</div>
			<br>
			  <div class="row d-flex justify-content-center">
			  		<div class="col-auto">
			  			  <img class="rounded-circle" src="phar1.png"  style="width: 180px;height: 180px;">
			  		</div>
			  </div>

			  <div id="signin" style="display: none;">
			  	<form>
					   <div class="row d-flex justify-content-center">
					  		 <div class="col-9 col-md-6">
					  		 	   <div class="md-form">
					  					 <i class="fas fa-signature prefix"></i>
					  					 <label for="pseudo">Login</label>
					  					 <input type="text" name="" id="pseudo" class="form-control" onfocus="focusInput(this.id)"  onfocusout="OutfocusInput(this.id)">
			  				       </div>
					  		 </div>
					   </div>

					   <div class="row d-flex justify-content-center">
					  		 <div class="col-9 col-md-6 offset-1">
					  		 	   <div class="md-form">
					  					 <i class="fas fa-key prefix"></i>
					  					 <label for="pwd">Password</label>
					  					 <input type="password" name="" id="pwd" class="form-control" onfocus="focusInput(this.id)"  onfocusout="OutfocusInput(this.id)">
			  				       </div>
					  		 </div>
					  		 <div class="col-auto" style="margin-top: 40px;">
						            <i class="far fa-eye" id="iconshow" onclick="ShowP();"></i>
						     </div>
					   </div>

					   <div class="row d-flex justify-content-center">
					  		 <div class="col-auto">
					  		 	   <button type="button" class="btn btn-dark-green">Connexion</button>
					  		 </div>
					   </div>
			  	</form>
			 
			  </div>

			  <div id="signup" style="display: none;">
			  		Inscription <?php include '../projetphp/formulaire.php'; ?>
			  </div>
		</div>
		<script type="text/javascript">
				 
				 function DisplayMenuOption(arg) 
				 {
				 	let signin = document.getElementById('signin_row');
				 	let signup = document.getElementById('signup_row');

				  	if (arg === 'Auth') 
				  	{	
				  		signup.classList.remove("border")         ;
				  		signup.classList.remove("border-success") ;
				  		signup.classList.remove("border-top-0")   ;
				  		signup.classList.remove("border-right-0") ;
				  		signup.classList.remove("border-left-0")  ;

				  		signin.classList.add("border")			  ;
				  		signin.classList.add("border-success")    ;
				  		signin.classList.add("border-top-0")      ;
				  		signin.classList.add("border-right-0")    ;
				  		signin.classList.add("border-left-0")     ;

				  		$(function() 
				  		{
				  			$("#signin_row").hide(1000,function() 
				  			{
				  				$("#signup").hide();
				  				$("#signin_row").fadeIn();
				  				$("#signin").show(1000);
				  				$("#signup_row").removeClass("bg-light");
				  				$("#signin_row").addClass("bg-light");
				  			})			          				  ;

				  		});

				  	}
				  	else
				  	{
				  		signin.classList.remove("border")		  ;
				  		signin.classList.remove("border-success") ;
				  		signin.classList.remove("border-top-0")   ;
				  		signin.classList.remove("border-right-0") ;
				  		signin.classList.remove("border-left-0")  ;

				  		signup.classList.add("border")            ;
				  		signup.classList.add("border-success")    ;
				  		signup.classList.add("border-top-0")      ;
				  		signup.classList.add("border-right-0")    ;
				  		signup.classList.add("border-left-0")     ;

				  		$(function() 
				  		{
				  			$("#signup_row").hide(1000,function() 
				  			{
				  				$("#signin").hide();
				  				$("#signup_row").fadeIn();
				  				$("#signup").show(1000);
				  				$("#signin_row").removeClass("bg-light");
				  				$("#signup_row").addClass("bg-light");
				  			})			          				  ;
				  		});
				  	}
				 } 

				let well        = 0; 
		   		let showIcon    = document.getElementById('iconshow')   ;
		   		let showInput   = document.getElementById('pwd')        ;

				function ShowP() 
	   			{
	   			 	if (well==0) 
	   			 	{
	   			 		well = 1 ;
	   			 		showInput.type       = 'text'            ;
	   			 		showIcon.className   = 'far fa-eye-slash';
	   			 	}
	   			 	else
	   			 	{
	   			 		well = 0 ;
	   			 		showInput.type       = 'password'  ;
	   			 		showIcon.className   = 'far fa-eye';
	   			 	}
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
				 }

				 DisplayMenuOption("Auth");
		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</html>