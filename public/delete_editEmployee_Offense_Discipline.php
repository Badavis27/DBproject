<!--https://www.youtube.com/watch?v=hT0juFPWVPc-->
<?php

require_once('connect.php');

$query = "SELECT OD_idnum, employee_fname, employee_lname, discipline_type, offense_type, offense_notes, from_date_employee, to_date_employee from employee natural join employee_offense_and_discipline natural join offense_and_discipline natural join discipline natural join offense";



$result = $mysqli->query($query);


?>

<!DOCTYPE html>
<html>

<head>
	<title>Offense/Discipline Data</title>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		
</head>

<body style="background-color: #EDEAE5">
<div >
	<h1 class="text-dark"> Offense/Discipline Information</h1>
</div>	
<div >
<a href="adminMenu.php" class="btn btn-secondary btn-lg active" role="button" >Back to Menu</a>
</div>
<br>
<?php
if($result && $result->num_rows >= 1 ){
	echo "<table class='table table-sm table-secondary' border=1>";
	echo "<tr style='background-color: #026670'> <th>OD ID</th> <th>First Name</th> <th>Last Name</th> <th>Discipline Type</th> <th>Offense Type</th> <th>Notes</th> <th>From Date</th> <th>To Date</th> <th>Delete</th> <th>Edit</th> </tr>";
	while($row = $result->fetch_assoc()){
		echo "<tr>";

		echo "<td>".$row["OD_idnum"]."</td>";
		echo "<td>".$row["employee_fname"]."</td>";
		echo "<td>".$row["employee_lname"]."</td>";
		echo "<td>".$row["discipline_type"]."</td>";
		echo "<td>".$row["offense_type"]."</td>";
		echo "<td>".$row["offense_notes"]."</td>";
		echo "<td>".$row["from_date_employee"]."</td>";
		echo "<td>".$row["to_date_employee"]."</td>";
		?>

		<td class="table-danger"><a href="deleteOffense.php?id=<?php echo urlencode($row["OD_idnum"]); ?>" onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>
		
		<td class="table-warning"><a href="editOffense.php?id=<?php echo urlencode($row["OD_idnum"]); ?>">Edit</a></td>


		<?php
		echo "<tr>";
	}
	echo "</table>";

}
else{
	die("No querry results found.");
}

$reslut->close(); 

?>

</body>
</html>