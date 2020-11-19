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

	<div class="container">
		<h2 id="soustitre">Information générale sur vos comptes</h2>

		<p style="text-align: center;"><?php echo getcurrentDate(); ?></p>

			<div class="row align-items-center">
				
				<h2 class="col-3">Compte Courant</h2>
				<div class="col-5" id="montantcc">
					<p style="font-weight: 500; font-size: 4em;"><?php echo getMoneyCC($_SESSION["identifiant"]); ?>€</p>
					<p>Montant actuel sur le compte courant</p>
				</div>
				<div>
					<p>Plafond : <?php echo getPlafond($_SESSION["identifiant"]) ?> €</p>
					<p>Redéfinir le plafond de paiement</p>
					<form method="post" action="function/refaireplafond.php">
						<p>
							<input type="text" name="plafondpaiement">
							€
						</p>
						<input type="submit" value="Nouveau plafond">

						
					</form>
				</div>
			</div>
	</div>


	<div class="container" id="montantce">
		<h2>Comptes Epargne</h2>
		<table class="table">
			<tr>
				<th>Type de compte</th>
				<th>RIB</th>
				<th>Montant</th>
				<th>Date de prochain versement d'interets</th>
			</tr>
			<?php getTabCE($_SESSION["identifiant"]) ?>
		</table>

	</div>

	<?php include("templates/footer.inc.php"); ?>
</body>
</html>