<?php 
	function exo1 () {
		return true;
	}

	echo exo1();

	echo "<hr>";
	function start ($str) {
		return $str;
	}

	echo start("Hello");

	echo "<hr>";
	function concat ($str1, $str2) {
		return $str1.$str2;
	}

	echo concat("Just", "Me");

	echo "<hr>";
	function compare ($num1, $num2) {
		if ($num1 > $num2) {
			return "Le premier nombre est plus grand";
		}

		else if ($num1 < $num2) {
			return "Le premier nombre est plus petit";
		}

		else if ($num1 == $num2) {
			return "Les deux nombres sont identiques";
		}
	}

	echo compare(10, 10);

	echo "<hr>";
	function concat2 ($str1, $num1) {
		return $str1.$num1;
	}

	echo concat("Just", 5);

	echo "<hr>";
	function personne ($nom, $prenom, $age) {
		return "Bonjour $nom $prenom".", tu as $age ans";
	}

	echo personne("Lanckriet", "Victor", 21);

	echo "<hr>";
	function majeur ($age, $genre) {
		if ($age >= 18 && $genre === "Homme") {
		return "Vous êtes un homme et vous êtes majeur";
		}

		else if ($age <= 18 && $genre === "Homme") {
		return "Vous êtes un homme et vous êtes mineur";
		}

		else if ($age <= 18 && $genre === "Femme") {
		return "Vous êtes une femme et vous êtes mineur";
		}

		else if ($age >= 18 && $genre === "Femme") {
		return "Vous êtes une femme et vous êtes majeur";
		}
	}

	echo majeur(21, "Homme");

	echo "<hr>";
	function sum ($num1, $num2, $num3) {
		return $num1+$num2+$num3;
	}
	echo sum(1, 2, 3);


?>