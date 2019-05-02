
<?php
//https://www.youtube.com/watch?v=qy2-d8uAn2k


require_once('connect.php');
if (isset($_POST['submitted'])) {


	$idnum = mysqli_real_escape_string($mysqli,$_POST['idnum']);
	$fname = mysqli_real_escape_string($mysqli,$_POST['fname']);
	$lname = mysqli_real_escape_string($mysqli,$_POST['lname']);
	$doh = mysqli_real_escape_string($mysqli,$_POST['doh']);
	$job = mysqli_real_escape_string($mysqli,$_POST['job']);
	$cottage = mysqli_real_escape_string($mysqli,$_POST['cottage']);
	$shift = mysqli_real_escape_string($mysqli,$_POST['shift']);
	$active = mysqli_real_escape_string($mysqli,$_POST['active']);
	$pin = mysqli_real_escape_string($mysqli,$_POST['pin']);

	$sqlinsert = "INSERT INTO employee (employee_idnum, employee_fname, employee_lname, employee_datehired, job_idnum, cottage_idnum, shift_idnum, active_idnum, pin_idnum) VALUES ('$idnum', '$fname', '$lname', '$doh', '$job', '$cottage', '$shift', '$active', '$pin')";
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
<html lang="en">
	<head> <title> Add Employee Data</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		
	</head>


<body style="background-color: #EDEAE5">
<div align ="center" class="container center_div">

	<form method="post" action="addEmployeeMGMT.php">
		<input type="hidden" name="submitted" value="true" />

			<fieldset>
				<legend>New Employee</legend>

				<table>
				<td style="margin: 20px; padding: 50px;">

				<div class="form-group">
					<label>Employee ID: <input class="form-control" type="text" name="idnum"/> </label>
				</div>
				<br>
				
				<div class="form-group">
					<label>First Name: <input class="form-control" type="text" name="fname"/> 
				</div>
				<br>
				
				<div class="form-group">
					<label>Last Name: <input class="form-control" type="text" name="lname"/> </label>
				</div>
				<br>

				<div class="form-group">
					<label>DOH: <input class="form-control" type="text" name="doh" placeholder="YYYY-MM-DD" /> </label>
				</div>

				</td>

				<td style="margin: 20px; padding: 50px;">

				<div class="form-group">
					<label>Job Title:
						<select class="form-control" name="job">
						<option value="ASST-DIR">Assistant Director</option>
						<option value="ATT">Active Treatment Technician</option>
						<option value="ATT-T">ATT Trainee</option>
						<option value="Beautician">Beautician</option>
						<option value="CLO">Clothing</option>
						<option value="CON">Contractual</option>
						<option value="DCAS">Direct Care Alternate Supervisor</option>
						<option value="DCS">Direct Care Supervisor</option>
						<option value="DCW">Direct Care Worker</option>
						<option value="DCW_PT">Part-time Direct Care Worker</option>
						<option value="DCW-ADV">Direct Care Worker Advanced</option>
						<option value="DCW-PT">Direct Care Worker: Part-time</option>
						<option value="DCW-T">Direct Care Worker-Trainee</option>
						<option value="DIR">Director</option>
						<option value="JAN">Janitorial</option>
						<option value="OTH">Other</option>
						<option value="PC">Program Coordinator</option>
						<option value="PM">People Mover</option>
						<option value="SEC">Secretary</option>
						<option value="SS">Shift Supervisor</option>
						</select>
					</label>
				</div>
				<br>
				<div class="form-group">
					<label>Cottage:
						<select class="form-control" name="cottage">
						<option value="AD">Administration</option>
						<option value="CH">Cedar Hill</option>
						<option value="CL">Clothing</option>
						<option value="DW">Dogwood</option>
						<option value="FW">Fernwood</option>
						<option value="FG">Forest Glen</option>
						<option value="JN">Janitorial</option>
						<option value="MG">Magnolia</option>
						<option value="MP">Maple Point</option>
						<option value="OG">Oak Grove</option>
						<option value="SS">Sunshine</option>
						<option value="SC">Swaying Cypress</option>
						<option value="UL">Unlisted</option>
						<option value="WW">Weeping Willows</option>
						<option value="WP">Whispering Pines</option>
						<option value="WN">Woodlea North</option>
						<option value="WS">Woodlea South</option>
						</select>
					</label>
				</div>
				<div class="form-group">
					
					<label>Shift:
						<select class="form-control" name="shift">
						<option value=1>A</option>
						<option value=2>B</option>
						<option value=3>C</option>
						</select>
					</label>
				</div>
				<div class="form-group">
					
					<label>Active:
						<select class="form-control" name="active">
						<option value=1>Active</option>
						<option value=2>Not Active</option>
						</select>
					</label>
				</div>
				<div class="form-group">
					
					<label>Pin
						<select class="form-control" name="pin">
						<option value=1>Pin 1</option>
						<option value=2>Pin 2</option>
						<option value=3>Pin 3</option>
						<option value=4>Pin 4</option>
						<option value=5>Pin 5</option>
						<option value=6>Pin 6</option>
						<option value=7>Pin 7</option>
						</select>
					</label>
				</div>
			</fieldset>
		</td>
		</table>
		<input class="btn btn-info" type="submit" name="submitted" value="add new employee" />
	</form>
	<br>
	<br>
	<div >
	<a href="delete_editEmployeeMGMT.php" class="btn btn-secondary btn-lg active" role="button" >Employee Information</a>
	</div>
	<br>
	<a href='managementMenu.php'>Back to Menu</a>
	

</div>

</body>

</html>