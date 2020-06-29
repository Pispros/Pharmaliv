<?php 
	include '../bd.php';

	$region[0]= "";
	$query    = $pdo->query("SELECT region,nom_pharm FROM pharmacie");
	$rows     = $query->fetchAll(PDO::FETCH_NUM) ;

?>
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
	<style type="text/css">
		body
		{
			overflow-x: hidden;
		}
		.add_drugs:hover
		{
			background-color: #eeeeee;
			height: 60px;
			width: 60px;
			display: flex;
			justify-content: center;
			align-items: center;
		}
	</style>
</head>
<body>
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-auto">
					  <img class="rounded-circle" style="height: 140px;width: 140px;" src="../img/form.svg">
				</div>
			</div>

<form method="post" action="CommandDrug.php" enctype='multipart/form-data'>
			<br><br>
			<div class="row d-flex justify-content-around align-items-center">
	   			   			<div class="col-auto offset-1 rounded-circle add_drugs">
	   			   				    <i class="fas fa-plus fa-3x" style="color: green;cursor: pointer;" title="Ajouter un produit à la commande" onclick="GenerateNewOption();"></i>
		 			   		</div>
	   			   			<div class="col-10" id="drugs_div" style="display: flex;flex-flow: column wrap;">
	   			   			
							</div>
			</div>
			<br><br>
		<div class="row d-flex justify-content-around">
			<div class="col-md-5" style="display: flex;flex-flow: row nowrap;align-items:center;">
	   			   				   	<div style="width: 10%;">
											 <i class="fas fa-city "></i>
									</div>
	   			   				  	<div style="width: 90%;">
	   			   				  		<select name="region" id="" class="browser-default custom-select" onchange="ChooseList(this.value);">
											 <option selected>Choix de la region</option>
                                             <option value="dakar">Dakar</option>
                                             <option value="thies">Thies</option>
                                             <option value="sl">Saint-Louis</option>
                                        </select>
								  </div>
			</div>
			<div class="col-md-5" style="display: flex;flex-flow: row nowrap;align-items:center;">
	   			   			      <div style="width: 10%;">
	   			   				  		   <i class="fas fa-mortar-pestle "></i>
								  </div>
							       <div style="width: 90%;">

							       	 <div id="drug_store_choice">
							            <select name="nom_phar" id="liste_phar" class="browser-default custom-select">
								             <option selected>Choix de la Pharmacie</option>
										 </select>
									 </div>

									</div>
							  </div>
	   		</div>
			<br>
		    <div class="row d-flex justify-content-around">
	   			   			<div class="col-md-5">
	   			   				  <div class="md-form">
	   			   				  		<i class="far fa-clock prefix"></i>
	   			   				  		<input id="choix_d" type="text" placeholder="JJ-MM-AAAA" name="choix_date" class="form-control" required>
	   			   				  		<label for="choix_d">Choix Date de Livraison ...</label>
	   			   				  </div>
	   			   			</div>


	   			   			<div class="col-md-5"  style="display: flex;flex-flow: row nowrap;align-items:center;">
	   			   					<div style="width: 10%;">
										  <i class="far fa-credit-card"></i>
									</div>
	   			   				  	<div style="width: 90%;">
	   			   				  		<select id="payement" class="browser-default custom-select" name="payement">
								             <option selected>Moyen de Payement</option>
                                             <option value="OM">Orange Money</option>
                                             <option value="Bank">Carte Bancaire</option>
                                             <option value="Cash">Cash à la livraison</option>
										 </select>
									</div>
							</div>
			</div>
				 <br>
				 	 	<div class="row d-flex justify-content-center">
				 	 		<input type="file" id="ord" name="ordonnance" style="display: none;">
								<div class="col-6" style="display: flex;justify-content: center;">
									  <label for="ord"><img title="Envoyer votre ordonnance" style="width: 200px;height: 150px;cursor: pointer;" class="rounded-circle" src="./../img/default_photo.png"></label>
								</div>
								<div class="col-6" style="display: flex;justify-content:flex-start;align-items: center;flex-flow: row wrap;">
									<div style="width: 100%;">
									  <button type="button" title="Envoyer votre ordonnance" id="go" class="btn purple-gradient">Envoyer votre Ordonnance</button>
									</div>
									<div id="ord_name" style="background-color: yellow;font-weight: bold;font-size: 22px;">
									  
									</div>
								</div>
		   			    </div>
		   			    <br>
	   			   		 <div class="row d-flex justify-content-center">
								<div class="col-auto">
										<button type="submit" id="command" class="btn aqua-gradient" disabled><i class="fas fa-plus"></i>&nbsp;&nbsp;Valider Commande</button>
								</div>
		   			    </div>
</form>
	  <script>
		$(function() 
	   			   {
	   			   		$("#choix_d").datepicker(
				  	  	{
				  	  		dateFormat: 'dd-mm-yy'
				  	  	});

				  	  	$("#go").click(function() 
				  	  	{
				  	  		$("#ord").trigger("click");
				  	  	})
	   			   });
	  </script>
	  <script type="text/javascript">
	  	let pass = 0 ;
	  	let pass2= 0 ;
	  	let pass3= 0 ;

		function GenerateNewOption() 
		{
			let drugs_div = document.getElementById('drugs_div')  ;

			let newRow  = document.createElement("div")           ;
			let newCol1 = document.createElement("div")           ;
			let newCol2 = document.createElement("div")           ;
			let newCol3 = document.createElement("div")           ;
			let newCol4 = document.createElement("div")           ;
			let input1  = document.createElement("input")         ;
			let input2  = document.createElement("input")         ;
			let newI    = document.createElement("i")             ;
			let newI2   = document.createElement("i")             ;
 		
 			newRow.setAttribute("class","row")                    ;
 			newRow.style.width         = '100%'                   ;
 			newRow.style.display       = 'flex'                   ;
 			newRow.style.flexDirection = 'row'                    ;
 			newRow.style.alignItems    = 'center'                 ;
 			newRow.style.marginBottom  = '15px'                   ;
 			//newRow.style.display = 'flex'                       ;

 			input1.setAttribute("type","text")                    ;
			input1.setAttribute("class","form-control")           ;
			input1.setAttribute("placeholder","Entrer le nom du produit");
			input1.setAttribute("name","nom_produit[]")           ;
			input1.setAttribute("required","")                    ;

			input2.setAttribute("type","number")                   ;
			input2.setAttribute("class","form-control")            ;
			input2.setAttribute("placeholder","Qté")               ; 
			input2.setAttribute("name","qte_produit[]")            ;
			input2.setAttribute("required","")                     ;
			input2.setAttribute("onchange","CorrectNumber(this)")  ;
			input2.setAttribute("onkeyup","CorrectNumber(this)")  ;

			newI.setAttribute("class","fas fa-sort-amount-up")     ;
			newI2.setAttribute("class","fas fa-times-circle fa-2x");
			newI2.setAttribute("onclick","DeleteCommand(this)")    ;
			newI2.setAttribute("title","Supprimer la commande")    ;
			newI2.style.cursor = 'pointer'                         ;
			newI2.style.color  = 'red    '                         ;

			newCol1.setAttribute("class","col-12")                 ;
			newCol1.setAttribute("class","offset-1")               ;
			newCol2.setAttribute("class","col-1 offset-1")         ;
			newCol3.setAttribute("class","col-2")                  ;
			newCol4.setAttribute("class","col-1")                  ;
			
			newCol1.appendChild(input1)                             ;
			newCol2.appendChild(newI)                               ;
			newCol3.appendChild(input2)                             ;
			newCol4.appendChild(newI2)                              ;

			newRow.appendChild(newCol1)                             ;
			newRow.appendChild(newCol2)                             ;
			newRow.appendChild(newCol3)                             ;
			newRow.appendChild(newCol4)                             ;

			drugs_div.appendChild(newRow)                           ;
		}

		function DeleteCommand(arg) 
		{
			arg.parentElement.parentElement.remove();
		}

		function ChooseList(arg) 
		{
			let correctD="" ;

			if (arg==='dakar') 
			{
				 correctD = document.getElementById('liste_dakar').cloneNode(true);
			}

			if (arg==='thies') 
			{
				 correctD = document.getElementById('liste_thies').cloneNode(true);
			}

			if (arg==='sl') 
			{
				 correctD = document.getElementById('liste_sl').cloneNode(true);
			}

			console.log(correctD);

			if (correctD!="") 
			{
				let pharSelect = document.getElementById('liste_phar');
				let empty_this = document.getElementById('liste_phar').querySelectorAll("option");

				for (let i = empty_this.length - 1; i >= 0; i--) 
				{
					empty_this[i].remove();
				}

				let liste = correctD.querySelectorAll("option");	

				for (let i = liste.length - 1; i >= 0; i--) 
				{
					pharSelect.appendChild(liste[i]);
				}
			}
		}

			$(function() 
        	{
	            $('input[type="file"]').change(function(e)
	            {
	            	let ext = e.target.files[0].name.split('.').pop();
	            	if (ext=="jpg" || ext=="png" || ext=="jpeg") 
	            	{
	            		console.log(e.target.files[0].name.split('.').pop());
	        			pass2 = 1 ;
	        			document.getElementById('ord_name').innerHTML= "Vous avez choisi "+e.target.files[0].name;
	            	}	
	            	else
	            	{
	            		alert("Veuillez choisir une photo conforme aux normes ! Extensions png/jpeg/jpg");
	            		pass2 = 0 ;
	            	}
	            	//$(".changeable");
	            });
       	    });

		document.addEventListener("mousemove", Go);
		document.addEventListener("click", Go)    ;

		function Go() 
		{
			if (document.getElementById('liste_phar').value!="Choix de la Pharmacie" && document.getElementById('payement').value!="Moyen de Payement" && pass2 === 1 && pass3 === 1) 
			{
				document.getElementById('command').disabled = false ;
			}
			else
			{
				document.getElementById('command').disabled = true ;
			}
		}

		function CorrectNumber(arg) 
		{
			if(arg.value<=0)
			{
				arg.classList.remove("is-valid")                    ;
				arg.classList.add("is-invalid")                     ;
				pass3 = 0                                           ;

				let x =arg.parentElement.parentElement.querySelectorAll("i") ;
				x[1].style.color = "red";

			}
			else
			{
				arg.classList.remove("is-invalid")                  ;
				arg.classList.add("is-valid")                       ;
				pass3 = 1 ;

				let x =arg.parentElement.parentElement.querySelectorAll("i") ;
				x[1].style.color = "green";
			}
		}

	   </script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <div style="display: none;">
  		<select id="liste_dakar">
  			<option selected>Choix de la Pharmacie</option>
  		<?php 
  			foreach ($rows as $row) 
  			{
  				if ($row[0]=='dakar') 
  				{
  		?>
  				   <option value="<?php echo $row[1]; ?>"><?php echo $row[1]; ?></option>
  		<?php 
  				}
  			}
  		?>
  		</select>

  		<select id="liste_thies">
  			<option selected>Choix de la Pharmacie</option>
  		<?php 
  			foreach ($rows as $row) 
  			{
  				if ($row[0]=='thies') 
  				{
  		?>
  				   <option value="<?php echo $row[1]; ?>"><?php echo $row[1]; ?></option>
  		<?php 
  				}
  			}
  		?>
  		</select>

  		<select id="liste_sl">
  			<option selected>Choix de la Pharmacie</option>
  		<?php 
  			foreach ($rows as $row) 
  			{
  				if ($row[0]=='sl') 
  				{
  		?>
  				   <option value="<?php echo $row[1]; ?>"><?php echo $row[1]; ?></option>
  		<?php 
  				}
  			}
  		?>
  		</select>
  </div>
</body>
</html>