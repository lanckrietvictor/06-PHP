<?php 
	$myArray = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");
	echo $myArray[2];

	echo "<hr>";
	echo $myArray[5];

	echo "<hr>";
	$myArray[7] = "août";
	echo $myArray[7];

	echo "<hr>";
	$arrayRhone = array(01 => "Ain", 03 => "Allier", 07=>"Ardeche", 15=>"Cantal", 26=>"Drome", 38=>"Isere", 42=>"Loire", 43=>"Haute-Loire", 63=>"Puy-de-Dome", 69=>"Rhone", 73=>"Savoie", 74=>"Haute-Savoie");
	echo $arrayRhone[69];

	echo "<hr>";
	$arrayRhone[57] = "Metz";
	echo $arrayRhone[57];

	echo "<hr>";
	foreach ($arrayRhone as $value) {
		echo $value."<br>";
	}

	echo "<hr>";
	foreach ($arrayRhone as $key => $value) {
		echo "Le département $value a le numéro $key. <br>";
	}

	echo "<hr>";
	

?>