<?php 
	session_start();
	echo $_SESSION["nom"]." ".$_SESSION["prenom"]." ".$_SESSION["age"];
?>