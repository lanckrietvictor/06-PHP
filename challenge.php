<?php 
$myArray = ["Mirror's Edge", "Portal", "Portal 2", "GTA: San Andreas", "Assassin's Creed", "Overwatch", "Need for Speed: Most Wanted"];
$length = sizeof($myArray);
$i = 0;
?>

<!DOCTYPE html>
<html>
<head>
	<title>DataTables</title>
	<!--jQuery-->
	<script 
	src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous">
</script>
<!--Datatables CSS-->
<link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<!--Bootstrap CSS
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css/">-->
	<!--Datatables JS-->
	<script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<!--Bootstrap JS
	<link rel="stylesheet" href="bootstrap/js/bootstrap.min.js/">-->
</head>
<body>

	<script>
		$(document).ready(function() {
			$('#games').DataTable();
		} );
	</script>

	
	<table id="games" class="display" cellspacing"0" width="100%">
		<thead>
			<tr>
				<th>
					Name
				</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			foreach ($myArray as $value) {
				echo "
				<tr>
					<td>
						$value
					</td>
				</tr>";
			}
			?>
		</tbody>
	</table>

</body>
</html>