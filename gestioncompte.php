<?php  include("templates/head.inc.php"); ?>
<body>
	<?php include("templates/header.inc.php"); ?>
	
	<?php include("templates/nav.inc.php"); ?>

	<h2 id="soustitre" > Creation / Suppression de compte</h2>
	<div class="container-fluid ">
		<div class="row justify-content-center">
			<div id="gestioncomptediv" class="col-5">
				<h3 id="gestioncomptesoustitre" >Ouverture</h3>
				<table class="table">
					<tr>
						<th>Type de compte</th>
						<th>Interet</th>
						<th>Plafond</th>
					</tr>
					<tr>
						<td>LivretA</td>
						<td>2%</td>
						<td>2797€</td>
					</tr>
					<tr>
						<td>PEL</td>
						<td>2%</td>
						<td>2797€</td>
					</tr>
				</table>

				<form action="#">
					<select>
						<option value="">LivretA</option>
						<option value="">LivretA</option>
						<option value="">LivretA</option>
					</select>
					<input type="submit" value="Ouvrir">
				</form>
				
			</div>

			<div id="gestioncomptediv"  class="col-5">
				<h3 id="gestioncomptesoustitre" >Clôturation</h3>
				<table class="table">
					<tr>
						<th>Type de compte</th>
						<th>RIB</th>
						<th>Montant</th>
					</tr>
					<tr>
						<td>LivretA</td>
						<td>112897329732</td>
						<td>2797€</td>
					</tr>
					<tr>
						<td>LivretA</td>
						<td>112897329732</td>
						<td>2797€</td>
					</tr>
				</table>
				<form action="#">
					<select>
						<option value="">LivretA - 1234567891010</option>
						<option value="">LivretA - 1234567891010</option>
						<option value="">LivretA - 1234567891010</option>
					</select>
					<input type="submit" value="Cloturer">
				</form>
			</div>	
		</div>
	</div>




		<?php include("templates/footer.inc.php"); ?>
</body>
</html>