<?php 
	if (isset($_GET["nom"]) && isset($_GET["prenom"])) {
		echo $_GET["nom"]." ".$_GET["prenom"];
	}

	else {
		echo "Tes paramètres sont pas là";
	}

	echo "<hr>";
	if (isset($_GET["age"])) {
		echo $_GET["age"];
	}

	else {
		echo "Pas de paramètre age";
	}

	echo "<hr>";
	if (isset($_GET["dateDebut"]) && isset($_GET["dateFin"])) {
		echo $_GET["dateDebut"]." ".$_GET["dateFin"];
	}

	else {
		echo "Tes paramètres sont pas là";
	}

	echo "<hr>";
	if (isset($_GET["langage"]) && isset($_GET["serveur"])) {
		echo $_GET["langage"]." ".$_GET["serveur"];
	}

	else {
		echo "Tes paramètres sont pas là";
	}

	echo "<hr>";
	if (isset($_GET["semaine"])) {
		echo $_GET["semaine"];
	}

	else {
		echo "Tes paramètres sont pas là";
	}

	echo "<hr>";
	if (isset($_GET["batiment"]) && isset($_GET["salle"])) {
		echo $_GET["batiment"]." ".$_GET["salle"];
	}

	else {
		echo "Tes paramètres sont pas là";
	}


?>