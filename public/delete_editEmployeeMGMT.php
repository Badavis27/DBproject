<!--https://www.youtube.com/watch?v=hT0juFPWVPc-->
<?php

require_once('connect.php');

$query = "SELECT employee_idnum, employee_fname, employee_lname, employee_datehired, employee_datehired, job_title, cottage_name, shift_letter, active, pin_titles from employee natural join shift natural join cottage natural join active natural join job_titles natural join pin_titles";


$result = $mysqli->query($query);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Employee Data</title>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		
</head>

<body style="background-color:#EDEAE5">

<div >
	<h1 class="text-dark"> Employee Information</h1>
</div>	
<div >
<a href="managementMenu.php" class="btn btn-secondary btn-lg active" role="button" >Back to Menu</a>
</div>
<br>
<?php
if($result && $result->num_rows >= 1 ){
	echo "<table class='table table-sm table-secondary' border=1>";
	echo "<tr style='background-color: #026670'> <th>id</th> <th>First Name</th> <th>Last Name</th> <th>DOH</th> <th>Job Title</th> <th>Cottage</th> <th>Shift</th> <th>Active</th> <th>Pin</th> <th>Delete</th> <th>Edit</th> </tr>";
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
		?>

		<td class="table-danger"><a href="deleteMGMT.php?id=<?php echo urlencode($row["employee_idnum"]); ?>" onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>


		<td class="table-warning"><a href="editMGMT.php?id=<?php echo urlencode($row["employee_idnum"]); ?>">Edit</a></td>


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