<?php include("./templates/head.inc.php"); ?>

<body>
	
<?php include("./templates/header.inc.php"); ?>


<?php 

	if(isset($_POST["nomcreation"]) && isset($_POST["prenomcreation"]) && isset($_POST["mdpcreation"]) && isset($_POST["mailcreation"]) ){
		if(strlen($_POST["mdpcreation"]) < 6){
			echo "<p>Mot de passe trop court, veuillez en mettre un de plus de 6 caractères !</p>";
		}
		$bdd = BDconnect();
		// verifier la non existence du compte
		$req = $bdd->prepare("SELECT mail, nom, prenom FROM Utilisateurs, Particuliers WHERE mail=? AND nom=? AND prenom=? ";)
		$req->execute(array($_POST["mailcreation"], $_POST["nomcreation"], $_POST["prenomcreation"]));

		if($req->rowCount() == 0){
		// si non existe, on insert l'utilisateur

			// trouver un rib unique
			$req = $bdd->prepare("SELECT rib FROM Compte");
			$req->execute();
			while($row = $req->fetch()){

			}
			// creer utilisateur
			$req = $bdd->prepare("INSERT INTO Utilisateurs (idUtilisateur, mail, mdp, ribCompteCourant)")
			// creer particulier
			// creer compte courant 
			// update table de compte en insérant le compte courant crée
			$req = $bdd->prepare("SELECT rib");

		}
		else{
			// sinon on renvoie une erreur

		}
		
		

		
	}
	else{
			echo "<p>Erreur dans le remplissage du formulaire !</p>";

	}
	echo "<p>Redirection ...</p>";
	header("refresh:5;url=index.php");
?>



<?php include("templates/footer.inc.php"); ?>

</body>
</html>