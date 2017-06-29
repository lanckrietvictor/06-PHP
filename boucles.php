<?php
	for ($i=0; $i<10; $i++) {
		echo $i."<br>";
	}

	echo "<hr>";
	$random = rand(1, 100);
	$i = 0;

	while ($i <= 20) {
		echo $i*$random."<br>";
		$i++;
	}

	echo "<hr>";
	$random = rand(1, 100);
	$i = 100;

	while ($i > 10) {
		echo $i*$random."<br>";
		$i--;
	}

	echo "<hr>";
	$i = 1;
	while ($i < 10) {
		echo $i."<br>";
		$i = $i + $i/2;
	}

	echo "<hr>";
	$i = 1;
	$times = 0;
	while ($i <= 15) {
		echo "On y arrive presque <br>";
		$i++;
		$times++;
	}

	echo "Ran through loop $times times";

	echo "<hr>";
	$i = 20;
	$times = 0;
	while ($i >= 0) {
		echo "C'est presque bon <br>";
		$i--;
		$times++;
	}

	echo "Ran through loop $times times";

	echo "<hr>";
	$i = 1;
	$times = 0;
	while ($i <= 100) {
		echo "On tient le bon bout <br>";
		$i = $i + 15;
		$times++;
	}

	echo "Ran through loop $times times";

	echo "<hr>";
	$i = 200;
	$times = 0;
	while ($i >= 0) {
		echo "Enfin <br>";
		$i = $i - 12;
		$times++;
	}

	echo "Ran through loop $times times";

?>