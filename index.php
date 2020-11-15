<!-- 
	Page d'accueil
	Permet de se connecter et de créer un compte
-->

<?php include("templates/head.inc.php"); ?>

<body>
	
<?php include("templates/header.inc.php"); ?>

<div class="container-fluid">
	<form method="post" action="connexion.php" id="connectionform" class="row justify-content-end ">
		<p>
			<label for="identifiant">Identifiant :</label>
			<input type="text" name="identifiant" id="identifiant">
		</p>

		<p>
			<label for="mdp">Mot de passe :</label>
			<input type="text" name="mdp" id="mdp">
		</p>

		<p>
			<input type="submit" value="Se connecter">
		</p>
	</form>
</div>


<div class="container-fluid">
	<img class="img-fluid" src="images/shakinghands.jpg">
	<a href="#creationaccountform"><button class=" btn btn-info">Créer un compte !</button></a>
	<p id="imgtext">Vous souhaitez démarrer notre aventure avec nous ? </p>
</div>


<div class="container-fluid" id="explications">
	<h3>Une banque adaptée à vos besoins </h3>
	<div class="row justify-content-center ">
		
		<div class="col-3">
			<h4>Lorem Lorem</h4>
			<p id="indexdesc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis labore soluta totam eveniet provident iure aliquam, ea quibusdam possimus error, illo quisquam veritatis modi explicabo architecto animi tempore similique. Deserunt!
			Reprehenderit corrupti expedita perferendis aperiam pariatur qui tenetur iure. Consectetur, animi. Expedita quae omnis exercitationem optio quaerat voluptatibus sint accusantium sit, laborum deleniti itaque dolorum nihil ducimus architecto sed aliquid.</p>
		</div>
		<div class="col-3">
			<h4>Lorem Lorem</h4>
			<p id="indexdesc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis labore soluta totam eveniet provident iure aliquam, ea quibusdam possimus error, illo quisquam veritatis modi explicabo architecto animi tempore similique. Deserunt!
			Reprehenderit corrupti expedita perferendis aperiam pariatur qui tenetur iure. Consectetur, animi. Expedita quae omnis exercitationem optio quaerat voluptatibus sint accusantium sit, laborum deleniti itaque dolorum nihil ducimus architecto sed aliquid.</p>
		</div>
		<div class="col-3">
			<h4>Lorem Lorem</h4>
			<p id="indexdesc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis labore soluta totam eveniet provident iure aliquam, ea quibusdam possimus error, illo quisquam veritatis modi explicabo architecto animi tempore similique. Deserunt!
			Reprehenderit corrupti expedita perferendis aperiam pariatur qui tenetur iure. Consectetur, animi. Expedita quae omnis exercitationem optio quaerat voluptatibus sint accusantium sit, laborum deleniti itaque dolorum nihil ducimus architecto sed aliquid.</p>
		</div>
	</div>
</div>


<div class="container">
	<h3>Créez un compte dès maintenant !</h3>
	<p>Et bénéficiez de 50 euros sur votre compte courant !</p>
	<div class="row justify-content-center">

		<div id="indexformcomptecreation" class="col-5 text-center">	
			<p id="indexsoustitre">Vous êtes un particulier ?</p>
			<form action="creercompteparticulier.php" method="post" id="creationaccountform" >
				<p>
					<label for="nomcreation"> Nom :</label>
					<input type="text" name="nomcreation" id="nomcreation" required="required" >
				</p>
				<p>
					<label for="prenomcreation"> Prenom :</label>
					<input type="text" name="prenomcreation" id="prenomcreation" required="required" >
				</p>
				<p>
					<label for="mdpcreation"> Mot de passe :</label>
					<input type="text" name="mdpcreation" id="mdpcreation" required="required" >
				</p>
				<p>
					<label for="mailcreation"> Adresse Mail :</label>
					<input type="text" name="mailcreation" id="mailcreation" required="required" >
				</p>
				<input type="submit" value="Creer votre compte Client!">
			</form>
		</div>
		
		<div id="indexformcomptecreation" class="col-5 text-center">	
			<p id="indexsoustitre">Vous êtes une Entreprise ?</p>
			<form action="#" method="post" id="creationaccountform" >
				<p>
					<label for="nomentreprise"> Nom d'Entreprise :</label>
					<input type="text" name="nomentreprise" id="nomentreprise">
				</p>
				<p>
					<label for="mdpcreation"> Mot de passe :</label>
					<input type="password" name="mdpcreation" id="mdpcreation">
				</p>
				<p>
					<label for="mailcreation"> Adresse Mail :</label>
					<input type="text" name="mailcreation" id="mailcreation">
				</p>
				<input type="submit" value="Creer votre compte Entreprise!">
			</form>
		</div>

	</div>
</div>


<?php include("templates/footer.inc.php"); ?>

</body>
</html>