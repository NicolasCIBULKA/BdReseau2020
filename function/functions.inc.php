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

// recuperation monnaie compte Courant
function getMoneyCC($identifiant){
	$bdd = BDConnect();
	$req = $bdd->prepare("SELECT montant FROM CompteCourant WHERE idUtilisateur=?");
	$intid = intval($identifiant);
	$req->execute(array($intid));
	$row = $req->fetch();
	return $row[0];
}


// recuperation de la date
function getcurrentDate(){
	$currentdate = date("d/m/Y");
	return $currentdate;
}

// recuperer infos du particulier
function getInfoParticulier($identifiant){
	$bdd = BDConnect();
	$req = $bdd->prepare("SELECT nom, prenom, mail FROM Particulier, Utilisateur WHERE Utilisateur.idUtilisateur = ?");
	$req->execute(array(intval($identifiant)));
	$row = $req->fetch();
	return $row;
}

// recuperer infos de l'entreprise
function getInfoEntreprise($identifiant){
	$bdd = BDConnect();
	$req = $bdd->prepare("SELECT nomEntreprise, idTerminal, mail FROM Entreprise, Utilisateur WHERE Utilisateur.idUtilisateur = ?");
	$req->execute(array(intval($identifiant)));
	$row = $req->fetch();
	return $row;
}

// recuperer l'argent total sur le compte 
function getTotalMoney($identifiant){
	$bdd = BDconnect();
	$total = 0;
	$req = $bdd->prepare("SELECT montant FROM CompteCourant WHERE idUtilisateur = ?");
	$req->execute(array(intval($identifiant)));
	$row = $req->fetch();
	$total+=$row[0];

	$req = $bdd->prepare("SELECT montant FROM CompteEpargne WHERE idUtilisateur = ?");
	$req->execute(array(intval($identifiant)));
	while($row = $req->fetch()){
		$total+=$row[0];
	}
	return $total;
}

// recuperer tableaux types de compte
function getTypeCompteTab(){
	$bdd = BDConnect();
	$req = $bdd->prepare("SELECT * FROM TypeCompteEpargne");
	$req->execute();
	while($row = $req->fetch()){
		echo "<tr>\n";
		echo "\t<td>".$row[0]."</td>\n";
		echo "\t<td>".$row[2]."%</td>\n";
		echo "\t<td>".$row[3]."€</td>\n";
		echo "</tr>\n";
	}
}

// recuperer tableau NomTypeComptes
function getNameTypeCompteTab(){
	$bdd = BDConnect();
	$req = $bdd->prepare("SELECT nomTypeCompte FROM TypeCompteEpargne");
	$req->execute();
	$tabNom;
	$i = 0;
	while($row = $req->fetch()){
		$tabNom[$i] = $row[0];
		$i++;
	}
	return $tabNom;
}

























 ?>