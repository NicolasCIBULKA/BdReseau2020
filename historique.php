<?php  include("templates/head.inc.php"); ?>
<body>
	<?php include("templates/header.inc.php"); ?>
	
	<?php include("templates/nav.inc.php"); ?>

	<h2 id="soustitre">Historique des Operations</h2>
	<div class="container">
		<div class="container">
			<h3>Compte courant</h3>
			<table class="table">
				<tr>
					<td>Date</td>
					<td>Type d'operation</td>
					<td>Montant débit</td>
					<td>Montant crédit</td>
					<td>Solde</td>
				</tr>
				<tr>
					<td>04/04/20</td>
					<td>Paiement</td>
					<td>23.45</td>
					<td></td>
					<td>454.34</td>
				</tr>
				<tr>
					<td>04/04/20</td>
					<td>Virement</td>
					<td></td>
					<td>132.34</td>
					<td>454.34</td>
				</tr>
				<tr>
					<td>04/04/20</td>
					<td>Paiement</td>
					<td>23.45</td>
					<td></td>
					<td>454.34</td>
				</tr>
			</table>
		</div>

		<div class="container">
			<h3>Comptes Epargnes</h3>
			<table class="table">
				<tr>
					<td>Date</td>
					<td>Type d'operation</td>
					<td>Montant débit</td>
					<td>Montant crédit</td>
					<td>Solde</td>
				</tr>
				<tr>
					<td>04/04/20</td>
					<td>Virement</td>
					<td></td>
					<td>132.34</td>
					<td>454.34</td>
				</tr>
				<tr>
					<td>04/04/20</td>
					<td>Virement</td>
					<td></td>
					<td>132.34</td>
					<td>454.34</td>
				</tr>
			</table>
		</div>
		
	</div>

	<?php include("templates/footer.inc.php"); ?>
</body>
</html>