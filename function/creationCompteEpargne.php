<?php 
/*
	script de création de compte
*/
session_start();
if(!isset($_SESSION["identifiant"])){
	session_destroy();
	header("Location:index.php");
} 
include("functions.inc.php");

if(isset($_POST["typeCompte"])){
	// connexion à la BD
	$bdd = BDConnect();
	// On verifie que la 
}










?>