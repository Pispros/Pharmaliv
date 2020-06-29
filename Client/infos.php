<style type="text/css">
	.card-element
	{
		display: flex;
		justify-content: center;
		align-items: center;
		height: 50px;
		color: white;
		font-weight: bold;
		cursor: pointer;
	}
	i:hover
	{
		background-color: black;
		height: 50px;
		width: 55px;
		display: flex;
		justify-content: center;
		align-items: center;
	}
</style>
<div class="row d-flex justify-content-center">
	<div class="col-auto">
			<input type="file" name="" id="profil" style="display: none;">
			<label for="profil"><img class="rounded-circle" src="../img/medecine.svg" style="height: 130px;width: 130px;"></label>
	</div>
</div>
<div class="row d-flex justify-content-center">
	<div class="col-auto">
			<strong><h4 style="background-color: yellow;"><?php echo $_SESSION['nom'].' '.$_SESSION['prenom']; ?></h4></strong>
	</div>
</div>
<br>
<div class="row d-flex justify-content-center">
	<div class="col-auto">
			<button type="button" class="btn btn-outline-success rounded-pill" onclick="AlterPage('profil.php')">Profil</button>
	</div>
</div>
<br><br>
<div class="row d-flex justify-content-center align-items-center">
	<div class="card-element col-12 alert alert-light elegant-color-dark" onclick="AlterPage('command.php')" style="margin-bottom: 15px;">
		  <i class="fas fa-file-invoice-dollar"></i>&nbsp;&nbsp;<h6 style="margin-top: 8px;"><strong>Commander</strong></h6>
	</div>
</div>
<div class="row d-flex justify-content-center align-items-center" onclick="window.location ='./../?logout=yes'">
	<div class="card-element col-auto">
		 <i class="fas fa-power-off fa-2x rounded-circle" style="color: red;"></i>
	</div>
</div>


