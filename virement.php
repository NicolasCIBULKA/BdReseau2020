<?php  include("templates/head.inc.php"); ?>
<body>
	<?php include("templates/header.inc.php"); ?>
	
	<?php include("templates/nav.inc.php"); ?>

	<h2 id="soustitre">Virements</h2>

	<div class="container">
		<h3>Vous voulez réaliser un virement ?</h3>
		<div id="selvirement" class="row justify-content-center">
			<a href="virementcomptes.php" id="vervirement" class="col-5">Virement entre compte</a>
			<a href="virementutilisateurs.php" id="vervirement" class="col-5">Virement vers un utilisateur</a>
		</div>
	</div>

	<div class="container">
		<h3>Historique des virements</h3>
		<h4>Virements inter-comptes</h4>
		<table class="table">
			<tr>
				<td>Numero de Virement</td>
				<td>Montant</td>
				<td>Compte Source</td>
				<td>Compte Destination</td>
			</tr>
			<tr>
				<td>463469270</td>
				<td>32.64</td>
				<td>2909234</td>
				<td>37427094</td>
			</tr>
			<tr>
				<td>463469270</td>
				<td>32.64</td>
				<td>2909234</td>
				<td>37427094</td>
			</tr>
			<tr>
				<td>463469270</td>
				<td>32.64</td>
				<td>2909234</td>
				<td>37427094</td>
			</tr>
			<tr>
				<td>463469270</td>
				<td>32.64</td>
				<td>2909234</td>
				<td>37427094</td>
			</tr>
		</table>

		<h4>Virement vers d'autres utilisateurs</h4>
		<table class="table">
			<tr>
				<td>Numero de Virement</td>
				<td>Montant</td>
				<td>Compte Source</td>
				<td>Destinataire</td>
			</tr>
			<tr>
				<td>463469270</td>
				<td>32.64</td>
				<td>2909234</td>
				<td>jean LUC</td>
			</tr>
			<tr>
				<td>463469270</td>
				<td>32.64</td>
				<td>2909234</td>
				<td>jean LUC</td>
			</tr>
			<tr>
				<td>463469270</td>
				<td>32.64</td>
				<td>2909234</td>
				<td>jean LUC</td>
			</tr>
		</table>
	</div>

	<?php include("templates/footer.inc.php"); ?>
</body>
</html>