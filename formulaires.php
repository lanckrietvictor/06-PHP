<!DOCTYPE html>
<html>
<head>
	<title>Formulaire</title>
</head>
<body>
	<form action="user.php" method="get">
		<label for="">Nom</label>
		<input type="text" name="nom" value="">
		<label for="">Prenom</label>
		<input type="text" name="prenom" value="">
		<button type="submit" value="submit">Get</button>
	</form>

	<hr>

	<form action="user.php" method="post">
		<label for="">Nom</label>
		<input type="text" name="nom" value="">
		<label for="">Prenom</label>
		<input type="text" name="prenom" value="">
		<button type="submit" value="submit">Post</button>
	</form>
</body>
</html>