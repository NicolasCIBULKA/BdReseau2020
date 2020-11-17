<?php 
session_start();
	if(!isset($_SESSION["identifiant"])){
		session_destroy();
		header("Location:index.php");
	} 
?>

<?php  include("templates/head.inc.php"); ?>
<body>
	<?php include("templates/header.inc.php"); ?>
	
	<?php include("templates/nav.inc.php"); ?>

	<h2 id="soustitre"> Informations Personelles </h2>

	<div class="container">
		<div  class="row justify-content-center">
			<div id="infopersonelles"  class="col-6">
				<p>Identifiant Client : <?php echo $_SESSION["identifiant"]; ?></p>
				<?php 
				if($_SESSION["status"] == "particulier" ){
					$tabPart = getInfoParticulier($_SESSION["identifiant"]);
					echo "<p>Adresse Mail : ".$tabPart[2]."</p>";
					echo "<p>Argent total en banque : ".getTotalMoney($_SESSION["identifiant"])."€</p>";
					echo "<p>Nom : ".$tabPart[0]."</p>";
					echo "<p>Prenom : ".$tabPart[1]."</p>";

				}
				else{
					$tabEnt = getInfoEntreprise($_SESSION["identifiant"]);
					echo "<p>Adresse Mail = ".$tabPart[2]."</p>";
					echo "<p>Argent total en banque : ".getTotalMoney($_SESSION["identifiant"])."€</p>";
					echo "<p>Nom Entreprise = ".$tabPart[0]."</p>";
					echo "<p>Identifiant de Terminal de Paiement = ".$tabPart[1]."</p>";
				}

				?>
			</div>
		</div>
		<h3 id="soustitre">Modifications d'informations</h3>
		<div class="row justify-content-center">

			<div id="infopersonelles"  class="col-6">
				
				<form method="post" action="function/modifyinfos.php">

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