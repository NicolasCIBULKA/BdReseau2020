<?php 
session_start();
if(!isset($_SESSION["identifiant"])){
	session_destroy();
	header("Location:index.php");
}
if(isset($_POST["mail"]) && !empty($_POST["mail"]) && isset($_POST["mdp"]) && !empty($_POST["mdp"]) && isset($_POST["prenom"]) && !empty($_POST["prenom"]))




?>