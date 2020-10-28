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
			<input type="submit" name="Se connecter">
		</p>
	</form>
</div>


<div class="container-fluid">
	<img class="row" width="100%" src="images/shakinghands.jpg">
	<a href="#"><button class=" btn btn-info ">Créer un compte !</button></a>
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
	<div class="row justify-content-center">
		<div class="col-6">
			
			<h3>Créez un compte dès maintenant !</h3>
			<p>fjzeiofjie</p>
		<form action="#" method="post" >
			<p>
				<label for="identifiant"> Identifiant:</label>
				<input type="text" name="identifiant" id="identifiant">
			</p>
		</form>
		</div>
		

	</div>
</div>










<?php include("templates/footer.inc.php"); ?>

</body>
</html>