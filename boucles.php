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

?>