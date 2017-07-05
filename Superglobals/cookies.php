<?php
	$cookie_name = "user";
	$cookie_name = $_POST["value"] ?? "user";
	$cookie_value = $_POST["user"];
	setcookie("user", $_POST["user"]);
	setcookie("password", $_POST["password"]);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cookies</title>
</head>
<body>
	<form action="cookies.php" method="post">
		<label for="">User</label>
		<input type="text" name="user" value="">
		<label for="">Password</label>
		<input type="text" name="password" value="">
		<button type="submit" value="submit">Post</button>
	</form>

	<?php 
		echo $_COOKIE["user"]." ".$_COOKIE["password"];
	?>
</body>
</html>