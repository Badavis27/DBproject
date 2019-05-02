<?php
//https://www.youtube.com/watch?v=qy2-d8uAn2k
require_once('connect.php');
if (isset($_POST['submitted'])) {

	$idnum = mysqli_real_escape_string($mysqli,$_POST['idnum']);
	$ODidnum = mysqli_real_escape_string($mysqli,$_POST['ODidnum']);
	$notes = mysqli_real_escape_string($mysqli,$_POST['notes']);
	$fromDate = mysqli_real_escape_string($mysqli,$_POST['fromDate']);
	$toDate = mysqli_real_escape_string($mysqli,$_POST['toDate']);
	

	$sqlinsert = "INSERT into employee_offense_and_discipline (employee_idnum, offense_and_discipline_idnum, offense_notes, from_date_employee, to_date_employee ) values ('$idnum', '$ODidnum', '$notes', '$fromDate', '$toDate')";
	$result = $mysqli->query($sqlinsert);


	if($result === TRUE){
		echo "recorded";
	}
	else{
		echo "error";
	}


}

?>

<!DOCTYPE html>
<html>
<head> <title>Add Offense Data</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	
	</head>


<body style="background-color: #EDEAE5">
<div align ="center" class="container center_div">
	<form method="post" action="addEmployee_Offense_Discipline.php">
		<input type="hidden" name="submitted" value="true" />

			<fieldset>
				<legend>New Employee Offense</legend>
				<div class="form-group">
					<label>Employee ID: <input class="form-control" type="text" name="idnum"/> </label>
				</div>
				<div class="form-group">
					<label>Offense/Discipline 
						<select class="form-control" name="ODidnum">
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
					</label>
				</div>
				<div class="form-group">
					<label>Notes: <textarea class="form-control" type="text" name="notes"/> </textarea></label>
				</div>
				<div class="form-group">
					<label>From Date: <input class="form-control" type="text" name="fromDate"/> </label>
				</div>
				<div class="form-group">
					<label>To Date: <input class="form-control" type="text" name="toDate"/> </label>
				</div>
			</fieldset>
		<br>
		<br>
		<input class="btn btn-info" type="submit" name="submitted" value="add new Offense"/>
	</form>
	<br>
	<div >
	<a href="delete_editEmployee_Offense_Discipline.php" class="btn btn-secondary btn-lg active" role="button" >Employee Offense/Discipline</a>
	</div>
	<br>
	<a href='adminMenu.php'>Back to Menu</a>


</div>
</body>

</html>
