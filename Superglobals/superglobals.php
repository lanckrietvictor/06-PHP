<?php 
	if(isset($_POST["ua"])) {
		echo $_SERVER['HTTP_USER_AGENT'];
	}

	if(isset($_POST["ip"])) {
		echo $_SERVER['REMOTE_ADDR'];
	}

	if(isset($_POST["server"])) {
		echo $_SERVER['SERVER_NAME'];
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="superglobals.php" name="ua" method="post">
		<button type="submit" name="ua">Get user agent</button>
		<button type="submit" name="ip">Get IP address</button>
		<button type="submit" name="server">Get name of the server</button>
	</form>
</body>
</html>