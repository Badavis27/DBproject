<?php

require_once('connect.php');

$query = "SELECT employee_fname, employee_lname, training_title, training_notes, from_date_training, to_date_training from employee natural join employee_training natural join training";


$result = $mysqli->query($query);




?>

<!DOCTYPE html>
<html>

<head> <title>Employee Offense Data</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		
</head>

<body style="background-color: #EDEAE5">


<div>
	<h1 class="text-dark"> Training Information</h1>
</div>
<div >
<a href="staffMenu.php" class="btn btn-secondary btn-lg active" role="button" >Back to Menu</a>
</div>
<br>
<?php
if($result && $result->num_rows >= 1 ){
	echo "<table class='table table-sm table-secondary' border=1>";
	echo "<tr style='background-color: #026670'> <th>First Name</th> <th>Last Name</th> <th>Training Title</th> <th>Notes</th> <th>From Date</th> <th>To Date</th> </tr>";
	while($row = $result->fetch_assoc()){
		echo "<tr>";

		echo "<td>".$row["employee_fname"]."</td>";
		echo "<td>".$row["employee_lname"]."</td>";
		echo "<td>".$row["training_title"]."</td>";
		echo "<td>".$row["training_notes"]."</td>";
		echo "<td>".$row["from_date_training"]."</td>";
		echo "<td>".$row["to_date_training"]."</td>";

		echo "<tr>";
	}
	echo "</table>";

}
else{
	die("No querry resutls found.");
}

$reslut->close(); 


?>

</body>
</html>