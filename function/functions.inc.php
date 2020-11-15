<?php 
/*
	------------------------------------------------------
				Ensemble des fonctions du site
	------------------------------------------------------
*/

// ---------------------------------------
//				FONCTIONS BD
// ---------------------------------------

// Fonction de connexion à la bd
function BDconnect(){
	try{
		$bdd=new PDO('pgsql:host=localhost;dbname=bdprojet','bduser','A123456*', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		
	}
	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}

	return $bdd;
}



// Fonction de fermeture de la Requete

function RequestClose($req){
	$req->closeCursor();
}


// ---------------------------------------
//			FONCTIONS AFFICHAGE
// ---------------------------------------


// ---------- FONCTIONS AFFICHAGE ----------































 ?>