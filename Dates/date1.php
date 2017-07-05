<?php 
echo "Aujourd'hui, le date est ".date("d/m/y");

echo "<hr>";
echo "Aujourd'hui, le date est ".date("d-m-y");

echo "<hr>";
setlocale(LC_ALL, "fr_FR.utf8");
echo strftime("%A %d %B %Y", time());

echo "<hr>";
echo time();
echo "<br>";
echo mktime(15, 0, 0, 8, 2, 2016);

echo "<hr>";
$now = time();
$end = strtotime("2016/05/16");
echo floor(abs($end - $now)/86400);

echo "<hr>";
echo cal_days_in_month(CAL_GREGORIAN, 2, 2017);

echo "<hr>";
echo date("d-m-Y", strtotime("+20 days"));

echo "<hr>";
echo date("d-m-Y", strtotime("-22 days"));

echo "<hr>";
$month = $_POST["month"];
switch ($month) {
	case 'January':
	$monthNum = 1;
	break;

	case 'February':
	$monthNum = 2;
	break;

	case 'March':
	$monthNum = 3;
	break;

	case 'April':
	$monthNum = 4;
	break;

	case 'May':
	$monthNum = 5;
	break;

	case 'June':
	$monthNum = 6;
	break;

	case 'July':
	$monthNum = 7;
	break;

	case 'August':
	$monthNum = 8;
	break;

	case 'September':
	$monthNum = 9;
	break;

	case 'October':
	$monthNum = 10;
	break;

	case 'November':
	$monthNum = 11;
	break;

	case 'December':
	$monthNum = 12;
	break;
	
	default:
	echo "Wrong input";
	break;
}

$year = $_POST["year"];

$firstDay = date("D", mktime(0, 0, 0, $monthNum, 01, $year));
switch ($firstDay) {
	case 'Mon':
	$blank = 0;
	break;

	case 'Tue':
	$blank = 1;
	break;

	case 'Wed':
	$blank = 2;
	break;

	case 'Thu':
	$blank = 3;
	break;

	case 'Fri':
	$blank = 4;
	break;

	case 'Sat':
	$blank = 5;
	break;

	case 'Sun':
	$blank = 6;
	break;
	
	default:
	echo "Wrong input";
	break;
}

$days_in_month = cal_days_in_month(CAL_GREGORIAN, $monthNum, $year);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<script>
		window.onload = function () {
			var start = 1970;
			var end = new Date().getFullYear();
			var options = "";
			for(var year = start ; year <=end; year++){
				options += "<option>"+ year +"</option>";
			}
			document.getElementById("year").innerHTML = "<option></option>"+options;
		}
	</script>
	<style>
		table, th, tr, td {
			border: solid 1px black;
			height: 20px;
			text-align: center;
		}

		td {
			width: 70px;
		}
	</style>
	<form action="date1.php" method="post">
		<label>Mois</label>
		<select name="month">
			<option value=""></option>
			<option value="January">Janvier</option>
			<option value="February">Février</option>
			<option value="March">Mars</option>
			<option value="April">Avril</option>
			<option value="May">Mai</option>
			<option value="June">Juin</option>
			<option value="July">Juillet</option>
			<option value="August">Août</option>
			<option value="September">Septembre</option>
			<option value="October">Octobre</option>
			<option value="November">Novembre</option>
			<option value="December">Décembre</option>
		</select>

		<label>Ans</label>
		<select name="year" id="year">
			<option value=""></option>
		</select>
		<button type="submit">Submit</button>
	</form>
	<table>
		<th colspan="7">
			<?php 
			echo $_POST["month"]." ".$_POST["year"];
			?>
		</th>
		<tr>
			<td>Lundi</td>
			<td>Mardi</td>
			<td>Mercredi</td>
			<td>Jeudi</td>
			<td>Vendredi</td>
			<td>Samedi</td>
			<td>Dimanche</td>
		</tr>
		<tr>
			<?php 
			$dayCount = 1;
			while ($blank > 0) {
				echo "<td></td>";
				$blank--;
				$dayCount++;
			}

			$dayNum = 1;

			while ($dayNum <= $days_in_month) {
				echo "<td> $dayNum </td>";
				$dayNum++;
				$dayCount++;
				if ($dayCount > 7) {
					echo "</tr><tr>";
					$dayCount = 1;
				}
			}
			?>
		</tr>
	</table>
</body>
</html>

