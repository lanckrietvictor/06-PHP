<?php 
	session_start();
	$_SESSION["nom"]="Lanckriet";
	$_SESSION["prenom"]="Victor";
	$_SESSION["age"]="21";
	echo $_SESSION["nom"]." ".$_SESSION["prenom"]." ".$_SESSION["age"];
?>