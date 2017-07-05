<?php 

if(isset($_POST["test"])) {
	$num = $_POST["factor"];
	$result = 1;
	while ($num > 0) {
		$result = $result * $num;
		$num--;
	}
	echo $result;
}

?> 

<!DOCTYPE html>
<html>
<head>
	<title>Factorial</title>
</head>
<body>
	<form action="fuckingaround.php" method="post">
		<textarea name="factor"></textarea>
		<button type="submit" name="test">Submit</button>
	</form>
</body>
</html>