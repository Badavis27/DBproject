<?php

include('connect.php');

?>


<!DOCTYPE html>
<html>

<head> <title>Employee Offense Update</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	
</head>
<body style="background-color: #EDEAE5">


<?php


if (isset($_POST['submitted'])) {

	

	$id = mysqli_real_escape_string($mysqli,$_POST['id']);
	$e_id = mysqli_real_escape_string($mysqli,$_POST['e_id']);
	$od_typeid = mysqli_real_escape_string($mysqli,$_POST['OD_typeid']);
	$notes = mysqli_real_escape_string($mysqli,$_POST['notes']);
	$from = mysqli_real_escape_string($mysqli,$_POST['from']);
	$to = mysqli_real_escape_string($mysqli,$_POST['to']);
	

	$sqlinsert = "UPDATE employee_offense_and_discipline SET OD_idnum = '$id',  employee_idnum ='$e_id', offense_and_discipline_idnum ='$od_typeid', offense_notes = '$notes', from_date_employee = '$from', to_date_employee = '$to' WHERE OD_idnum =" .$id;
	$result = $mysqli->query($sqlinsert);

	if($result === TRUE){
		echo "recorded";
	}
	else{
		echo "error";
	}



} 



if (isset($_GET['id']) && $_GET['id'] !== "") {
	$ID = $_GET['id'];


	$query = "SELECT OD_idnum, employee_idnum, offense_and_discipline_idnum, offense_notes, from_date_employee, to_date_employee, employee_fname, employee_lname FROM employee_offense_and_discipline NATURAL JOIN employee WHERE OD_idnum =" .$ID;

	
  $result = $mysqli->query($query);
	
	if($result) {
	
	 $row = $result->fetch_assoc();
	  echo "<div align ='center' class='container center_div'>";
	  echo "<h3>".$row["employee_fname"]." ".$row["employee_lname"]."'s Offense</h3>";

	  echo "<p><form action = 'editOffense.php?id={$ID}' method='post'>";

	  echo "<div class='form-group'>";
	  echo "<label><input class='form-control' type = 'text' name = 'id' value = '".$row["OD_idnum"]."' />OD ID</label>";
	  echo "</div>";
	  echo "<div class='form-group'>";
	  echo "<label><input class='form-control' type = 'text' name = 'e_id' value = '".$row["employee_idnum"]."' />Employee ID</label>";
	  echo "</div>";
	  echo "<div class='form-group'>";
	  echo "<label><select class='form-control' type = 'text' name = 'OD_typeid' value = '".$row["offense_and_discipline_idnum"]."' />Offense/Discipline
	 					<option value='".$row["offense_and_discipline_idnum"]."' >'".$row["offense_and_discipline_idnum"]."'</option>
	  					<option value=1>Unexcused Absence / Attendance</option>
						<option value=2>Group 1 / Attendance</option>
						<option value=3>No Call/No Report / Attendance</option>
						<option value=4>Patterns / Disciplinary</option>
						<option value=5>Other / Disciplinary</option>
						<option value=6>Inservice / Disciplinary</option>
						<option value=7>Conference / Disciplinary</option>
						<option value=8>Administrative Leave / Disciplinary</option>
						<option value=9>Termination / Disciplinary</option>
						<option value=10>Pre-Suspension / Disciplinary</option>
						<option value=11>Suspension / Disciplinary</option>
						<option value=12>Memo-before base payroll / Dock</option>
						<option value=13>Memo-after base payroll / Dock</option>
						<option value=14>Administrative Leave / Dock</option>
						<option value=15>Conference-before base payroll / Dock</option>
						<option value=16>Conference-after base payroll / Dock</option>
						<option value=17>Group 1-before base payroll / Dock</option>
						<option value=18>Group 1-after base payroll / Dock</option>
						<option value=19>Group 2-before base payroll / Dock</option>
						<option value=20>Group 2-after base payroll / Dock</option>
						<option value=21>Refer to Personnel / Dock</option>
						<option value=22>Group 1 / Reprimand</option>
						<option value=23>Group 2 / Reprimand</option>
						<option value=24>Group 3 / Reprimand</option>
						<option value=25>Group 1 / Tardiness</option>
						<option value=26>Group 2 / Tardiness</option>
						<option value=27>Group 3 / Tardiness</option>
						</select>
	  Offense/Discipline</label>";
	  echo "</div>";
	  echo "<div class='form-group'>";
	  echo "<label><input  class='form-control' type = 'text' name = 'notes' value = '".$row["offense_notes"]."' /> Notes</label>";
	  echo "</div>";
	  echo "<div class='form-group'>";
	  echo "<label><input class='form-control' type = 'text' name = 'from' value = '".$row["from_date_employee"]."' />Form Date</label>";
	  echo "</div>";
	  echo "<div class='form-group'>";
	  echo "<label><input class='form-control' type = 'text' name = 'to' value = '".$row["to_date_employee"]."' />To Date</label>";
	  echo "</div>";
	  




	  echo "<p><input class='btn btn-info' type = 'submit' name = 'submitted' value = 'Change' />";
	  echo "</form>";
	  echo "<div >
			<a href='delete_editEmployee_Offense_Discipline.php' class='btn btn-secondary btn-lg active' role='button' >Employee Offense/Discipline</a>
			</div>
			<br>
			<a href='adminMenu.php'>Back to Menu</a>";

	}
	else{
		echo "sorry again";
	}
}

else{
	echo "sorry";
}
?>


</body>
</html>
