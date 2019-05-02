<!--https://www.youtube.com/watch?v=hT0juFPWVPc-->

<?php

require_once('connect.php');

$query = "SELECT employee_idnum, employee_fname, employee_lname, employee_datehired, employee_datehired, job_title, cottage_name, shift_letter, active, pin_titles from employee natural join shift natural join cottage natural join active natural join job_titles natural join pin_titles";


$result = $mysqli->query($query);




?>

<!DOCTYPE html>
<html>


	<head> <title>Employee Data</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<!--<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
	</head>


<body>
<div class="p-3 mb-2 bg-info text-white">
	<h1 class="text-dark"> Employee Information</h1>
</div>



	
<?php
if($result && $result->num_rows >= 1 ){
	echo "<table class='table table-sm' border=1>";
	echo "<tr class='table-success'> <th>id</th> <th>First Name</th> <th>Last Name</th> <th>DOH</th> <th>Job Title</th> <th>Cottage</th> <th>Shift</th> <th>Active</th> <th>Pin</th> </tr>"; 
	while($row = $result->fetch_assoc()){
		echo "<tr>";

		echo "<td>".$row["employee_idnum"]."</td>";
		echo "<td>".$row["employee_fname"]."</td>";
		echo "<td>".$row["employee_lname"]."</td>";
		echo "<td>".$row["employee_datehired"]."</td>";
		echo "<td>".$row["job_title"]."</td>";
		echo "<td>".$row["cottage_name"]."</td>";
		echo "<td>".$row["shift_letter"]."</td>";
		echo "<td>".$row["active"]."</td>";
		echo "<td>".$row["pin_titles"]."</td>";

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
