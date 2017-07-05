<?php 
$check = false;
$path_extension = pathinfo($_POST["file"]);
if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["title"]) && isset($_POST["file"])) {
	echo $_POST["title"]." ".$_POST["nom"]." ".$_POST["prenom"]." ".$_POST["file"];
}

if (!empty($_POST["file"])) {
	$check = true;
	if ($path_extension["extension"]!="pdf") {
		echo "<br> Your file is not a pdf";
	}
}


else if (!empty($_POST["title"])) {
	$check = true;
}

else if (!empty($_POST["nom"])) {
	$check = true;
}

else if (!empty($_POST["prenom"])) {
	$check = true;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulaire</title>
</head>
<body>
	<?php if ($check == false) { ?>
	<form action="index.php" method="post">
		<label for="">Civilité</label>
		<select name="title">
			<option></option>
			<option value="Mr">Mr.</option>
			<option value="Mme">Mme.</option>
		</select>
		<label for="">Nom</label>
		<input type="text" name="nom">
		<label for="">Prenom</label>
		<input type="text" name="prenom">
		<input type="file" name="file">
		<button type="submit">Post</button>
	</form>
	<?php } ?>
</body>
</html>