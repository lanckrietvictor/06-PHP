<div id="menu">
	<?php include "header.php"; ?>
</div>

<div id="body">
	<?php 
	switch ($_GET["action"]) {
		case "Impala":
			include $_GET["action"].".php";
			break;

		case "Lion":
			include $_GET["action"].".php";
			break;

		case "Tigre":
			include $_GET["action"].".php";
			break;

		case "Elephant":
			include $_GET["action"].".php";
			break;

		case "Crocodile":
			include $_GET["action"].".php";
			break;

	}
	?>
</div>

<div id="footer">
	<?php include "footer.php" ?>
</div>