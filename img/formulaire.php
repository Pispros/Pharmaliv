<html>
    <h1>Formuaire d'inscription</h1>
    <form action="admin.php" method="Post">
  <div>
      <label for="prenom">Prenom(s)*</label><br>
      <input type="text" required>
</div>      
<div>
<label for="nom">Nom*</label><br>
<input type="text" required>
</div>
<div>
<label for="age">entrez votre date de naissance*</label><br>
<input type="text" placeholder="jj/mm/aa"required>
</div>
<div>
<label for="sexe">sexe*</label><br>
<select name="genre" id="" required>
    <option value="f">femme</option>
    <option value="H">homme</option>
    <option value="A">Autre</option>
</select>
</div>
<div>
<label for="region">Region*</label><br>
<select name="region" id="" required>
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
<div>
<label for="adresse">Adresse*</label><br>
<input type="text" required>
</div>
<div>
    <label for="number">numero de telephone*</label><br>
    <input type="text" required>
</div>
<div><label for="mail">entrez votre mail</label></div>
<input type="mail"placeholder="exemple@gmail.com" required>
<div>
<div><label for="password">entrez votre mot de passe</label></div>
<input type="password"  required>
<div>
<label for="soumettre"></label>
<input type="submit" value="soumettre">
</div>



    </form>
</html>
<style>
    div
    {
padding:5px;
    }
    form
    {
     text-align:center;
     background-color:green;
     margin-left:300px;
     margin-right:300px;
     border-radius:5%;
    }
    input{
        border:solid;
    }
    h1{
        text-align:center;
    }
    html{background-image:url(phamaliv2.png);
    background-position:center;   
    }
</style>