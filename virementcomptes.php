<?php  include("templates/head.inc.php"); ?>
<body>
	<?php include("templates/header.inc.php"); ?>
	
	<?php include("templates/nav.inc.php"); ?>

	<h2 id="soustitre">Virement vers un autre compte</h2>

		<div class="container">
			<div class="row justify-content-center">
				<div id="virementdiv" class="col-6 ">
					<form method="post" action="">
						<p>
							<label for="comptesource">Compte Source : </label>
							<select name="comptesource" id="comptesource">
								<option value="">LivretA - 7893942</option>
								<option value="">PEL - 7893942</option>
								<option value="">COmpte Courant - 7893942</option>
								<option value="">LivretA - 7893942</option>
							</select>
						</p>
						
						<p>
							<label for="comptedest">Compte Destination : </label>
							<select name="comptedest" id="comptedest">
								<option value="">LivretA - 7893942</option>
								<option value="">PEL - 7893942</option>
								<option value="">COmpte Courant - 7893942</option>
								<option value="">LivretA - 7893942</option>
							</select>
						</p>

						<p>
							<label for="montant">Montant de la transaction : </label>
							<input type="text" name="montant" id="montant">
							<label for="montant"> Euros</label>
						</p>
						<input type="submit" value="Réaliser le virement ">
					</form>
				</div>
			</div>
			
		</div>

		<?php include("templates/footer.inc.php"); ?>
</body>
</html>