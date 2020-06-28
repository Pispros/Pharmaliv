<!DOCTYPE html>
<html>
<head>
<title>INFORMATION PROFIL</title>
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
		input[type=radio]
		{
			width: 15px;
			height: 15px;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
<form action="f_subscribe.php?for=infpro" method="post">
	   			   <div id="infpro">
	   			   	<br>
	   			   		 <div class="row d-flex justify-content-center">
			   			   	<div class="col-auto">
			   			   	      <button type="button" class="btn aqua-gradient rounded-pill">INFORMATION PROFIL</button>
			   			   	</div>
	   			   		 </div>	
	   			   	    <div class="row d-flex justify-content-between">
	   			   			<div class="col-md-5 offset-md-1">
	   			   				  <div class="md-form">
	   			   				  		<i class="fas fa-signature prefix"></i>
	   			   				  		<input id="nom_infpro" type="text" name="nom_infpro" class="form-control" required>
	   			   				  		<label for="nom_infpro">Nom ...</label>
	   			   				  </div>
	   			   			</div>
	   			   			<div class="col-md-5">
	   			   				   <div class="md-form">
	   			   				  		<i class="far fa-address-book prefix"></i>
	   			   				  		<input id="prenom_infpro" type="text" name="prenom_infpro" class="form-control" required>
	   			   				  		<label for="prenom_infpro">Prenoms ...</label>
	   			   				  </div>
	   			   			</div>
                        </div>	
                              <div class="row d-flex justify-content-around">
	   			   			<div class="col-md-5 offset-md-1">
	   			   					<div class="md-form">
	   			   				  		<i class="fas fa-envelope prefix"></i>
	   			   				  		<input type="text" id="mail_infpro" class="form-control" required value="VOTRE MAIL" disabled>
	   			   				  		<label for="mail_infpro">Mail </label>
	   			   				    </div>
	   			   			</div>
	   			   			<div class="col-md-5">
	   			   					<div class="md-form">
	   			   				  		<i class="fas fa-key prefix"></i>
	   			   				  		<input id="pwd_infpro" type="text" name="pwd_infpro" class="form-control" required>
	   			   				  		<label for="pwd_infpro">Mot de Passe (optionnel)</label>
	   			   				    </div>
	   			   			</div>
                        </div>	
                            <div class="row d-flex justify-content-around">
	   			   			<div class="col-md-5 offset-md-1">
	   			   				  <div class="md-form">
	   			   				  		<i class="fas fa-phone prefix"></i>
	   			   				  		<input id="telephone_infpro" type="text" name="telephone_infpro" class="form-control" required>
	   			   				  		<label for="telephone_infpro">Telephone ...</label>
	   			   				  </div>
                            </div>
                        </div>
                    </div>
    </div>
</form>
</body>
</html>
