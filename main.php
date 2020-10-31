<?php  include("templates/head.inc.php"); ?>
<body>
	<?php include("templates/header.inc.php"); ?>
	
	<?php include("templates/nav.inc.php"); ?>

	<div class="container">
		<h2 id="soustitre">Information générale sur vos comptes</h2>

		<p style="text-align: center;">28/10/2020</p>

			<div class="row align-items-center">
				
				<h2 class="col-3">Compte Courant</h2>
				<div class="col-5" id="montantcc">
					<p style="font-weight: 500; font-size: 4em;">234.45€</p>
					<p>Montant actuel sur le compte courant</p>
				</div>
				<div>
					<p>Redéfinir le plafond de paiement</p>
					<form method="post" action="#">
						<p>
							<input type="text" name="plafondpaiement">
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
				<td>Type de compte</td>
				<td>Montant</td>
				<td>Date de prochain versement d'interets</td>
			</tr>
			<tr>
				<td>LivretA</td>
				<td>300.43</td>
				<td>03/02</td>
			</tr>
			<tr>
				<td>PEL</td>
				<td>443.54</td>
				<td>07/03</td>
			</tr>
			<tr>
				<td>Assurance Vie</td>
				<td>2458.57</td>
				<td>23/05</td>
			</tr>
		</table>

	</div>

	<?php include("templates/footer.inc.php"); ?>
</body>
</html>