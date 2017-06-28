<?php  
	$age = 1;
	if ($age >= 18) {
		echo "Vous êtes majeur";
	}

	else {
		echo "Vous êtes mineur";
	}


	echo "<hr>";
	$IsEasy = false;
	if ($IsEasy) {
		echo "C'est facile!!";
	}

	else {
		echo "C'est difficile!!";
	}

	echo "<hr>";
	$age = 25;
	$genre = "Homme";

	if ($age >= 18 && $genre === "Homme") {
		echo "Vous êtes un homme et vous êtes majeur";
	}

	else if ($age <= 18 && $genre === "Homme") {
		echo "Vous êtes un homme et vous êtes mineur";
	}

	else if ($age <= 18 && $genre === "Femme") {
		echo "Vous êtes une femme et vous êtes mineur";
	}

	else if ($age >= 18 && $genre === "Femme") {
		echo "Vous êtes une femme et vous êtes majeur";
	}

	else {
		echo "Something went wrong";
	}

	echo "<hr>";
	$magnitude = 5;
	switch ($magnitude) {
		case 1:
			echo "1: Micro-séisme impossible à ressentir.";
			break;
		case 2:
			echo "2: Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
			break;
		case 3:
			echo "3: Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
			break;
		case 4:
			echo "4: Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
			break;
		case 5:
			echo "5: Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
			break;
		case 6:
			echo "6: Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
			break;
		case 7:
			echo "7: Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
			break;
		case 8:
			echo "8: Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
			break;
		case 9:
			echo "9: Séisme capable de tout détruire sur une très vaste zone.";
			break;
		default:
			echo "Est-ce que vous avez écrit une magnitude correcte?";
	}

	echo "<hr>";
	$maVariable = "Femme";
	if ($maVariable != 'Homme') {
		echo "C'est une développeuse !!!";
	}

	else if ($maVariable == 'Homme') {
		echo "C'est un développeur !!!";
	}

	echo "<hr>";
	$monAge = 20;

	if ($monAge >= 18) {
		echo "T'es majeur";
	}

	else {
		echo "T'es mineur";
	}

	echo "<hr>";
	$maVariable = false;

	if ($maVariable) {
		echo "C'est ok!!";
	}

	else {
		echo "C'est pas bon";
	}




?>