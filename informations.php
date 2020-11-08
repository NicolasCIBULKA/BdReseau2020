<?php  include("templates/head.inc.php"); ?>
<body>
	<?php include("templates/header.inc.php"); ?>
	
	<?php include("templates/nav.inc.php"); ?>

	<h2 id="soustitre"> Informations Personelles </h2>

	<div class="container">
		<div  class="row justify-content-center">
			<div id="infopersonelles"  class="col-6">
				<p>Identifiant Client : 69329</p>
				<p>Adresse Mail : fjezipfj@fefkzeo.ke</p>
				<p>Argent total en banque : 849302€</p>
				<p>Nom : fazefa</p>
				<p>Prenom : feazfa</p>
				<!-- 
					------------------------------------------------------------
				Mettre le nom d'entreprise et l'id terminal pour une entreprise
					------------------------------------------------------------
				-->
			</div>
		</div>
		<h3 id="soustitre">Modifications d'informations</h3>
		<div class="row justify-content-center">

			<div id="infopersonelles"  class="col-6">
				
				<form action="#">
					<div>
						<label for="mail" >Adresse mail : </label>
						<input type="text" name="mail" value="efizhap@fioazj.cs">
					</div>
					<div>
						<label for="mdp">Mot de passe : </label>
						<input type="password" name="mdp">
					</div>
					<div>
						<label for="nom" >Nom : </label>
						<input type="text" name="nom" value="efzefze">
					</div>
					<div>
						<label for="prenom" >Prenom : </label>
						<input type="text" name="prenom" value="efizhap">
					</div>
					<input type="submit" value="Modifier les informations">
				</form>
			</div>
		</div>
	</div>



	<?php include("templates/footer.inc.php"); ?>
</body>
</html>