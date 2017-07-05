<?php 
	if (isset($_GET["nom"]) && isset($_GET["prenom"])) {
		echo $_GET["nom"]." ".$_GET["prenom"];
	}

	if (isset($_POST["nom"]) && isset($_POST["prenom"])) {
		echo $_POST["nom"]." ".$_POST["prenom"];
	}
?>