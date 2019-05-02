<?php

include('connect.php');

?>


<!DOCTYPE html>
<html>




	<head> <title>Employee Data Update</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		
	</head>

<body style="background-color:#EDEAE5">


<?php

if (isset($_POST['submitted'])) {

	

	$idnum = mysqli_real_escape_string($mysqli,$_POST['id']);
	$fname = mysqli_real_escape_string($mysqli,$_POST['fname']);
	$lname = mysqli_real_escape_string($mysqli,$_POST['lname']);
	$doh = mysqli_real_escape_string($mysqli,$_POST['doh']);
	$job = mysqli_real_escape_string($mysqli,$_POST['job']);
	$cottage = mysqli_real_escape_string($mysqli,$_POST['cottage']);
	$shift = mysqli_real_escape_string($mysqli,$_POST['shift']);
	$active = mysqli_real_escape_string($mysqli,$_POST['active']);
	$pin = mysqli_real_escape_string($mysqli,$_POST['pin']);

	$sqlinsert = "UPDATE employee SET employee_fname = '$fname', employee_lname ='$lname', employee_datehired ='$doh', job_idnum = '$job', cottage_idnum = '$cottage', shift_idnum ='$shift', active_idnum ='$active', pin_idnum = '$pin' WHERE employee_idnum =" .$idnum;
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

	

	$query = "SELECT employee_idnum, employee_fname, employee_lname, employee_datehired, job_idnum, cottage_idnum, shift_idnum, active_idnum, pin_idnum FROM employee WHERE employee_idnum =" .$ID;

	
  $result = $mysqli->query($query);

	if($result) {
	 $row = $result->fetch_assoc();
	  echo "<div align ='center' class='container center_div'>";

	  echo "<h3>".$row["employee_fname"]." ".$row["employee_lname"]."'s Profile</h3>";

	  echo "<p><form action = 'editMGMT.php?id={$ID}' method='post'>";
	  echo "<div class='form-group'>";
	  echo "<table>
			<td style='margin: 20px; padding: 50px;'>";
	  echo "<label><input class='form-control'  type = 'text' name = 'id' value = '".$row["employee_idnum"]."' /> Employee ID</label>";
	  echo "</div>";
	  echo "<br>";
	  echo "<br>";
	  echo "<div class='form-group'>";
	  echo "<label><input class='form-control' type = 'text' name = 'fname' value = '".$row["employee_fname"]."' /> Employee First Name</label>";
	  echo "</div>";
	  echo "<br>";
	  echo "<div class='form-group'>";
	  echo "<label><input class='form-control'  type = 'text' name = 'lname' value = '".$row["employee_lname"]."' /> Employee Last Name</label>";
	  echo "</div>";
	  echo "<br>";
	  echo "<div class='form-group'>";
	  echo "<label><input class='form-control' type = 'text' name = 'doh' value = '".$row["employee_datehired"]."' /> (YYYY-MM-DD)</label>";
	  echo "</div>";
	  echo "<br>";
	  echo "</td>
			<td style='margin: 20px; padding: 50px;'>";
	  echo "<div class='form-group'>";
	  echo "<label><select class='form-control' name = 'job' value = '".$row["job_idnum"]."' /> Job 
	  					<option value='".$row["job_idnum"]."' >'".$row["job_idnum"]."'</option>
						<option value='ASST-DIR'>Assistant Director</option>
						<option value='ATT'>Active Treatement Technician</option>
						<option value='ATT-T'>ATT Trainee</option>
						<option value='Beautician'>Beautician</option>
						<option value='CLO'>Clothing</option>
						<option value='CON'>Contractual</option>
						<option value='DCAS'>Direct Care Alternate Supervisor</option>
						<option value='DCS'>Direct Care Supervisor</option>
						<option value='DCW'>Direct Care Worker</option>
						<option value='DCW_PT'>Part-time Direct Care Worker</option>
						<option value='DCW-ADV'>Direct Care Worker Advanced</option>
						<option value='DCW-PT'>Direct Care Worker: Part-time</option>
						<option value='DCW-T'>Direct Care Worker-Trainee</option>
						<option value='DIR'>Director</option>
						<option value='JAN'>Janitorial</option>
						<option value='OTH'>Other</option>
						<option value='PC'>Program Coordinator</option>
						<option value='PM'>People Mover</option>
						<option value='SEC'>Secretary</option>
						<option value='SS'>Shift Supervisor</option>
						</select>
			Job</label>";
	  echo "</div>";
	  echo "<div class='form-group'>";
	  echo "<label><select class='form-control' name = 'cottage' value = '".$row["cottage_idnum"]."' /> Cottage 
						<option value='".$row["cottage_idnum"]."' >'".$row["cottage_idnum"]."'</option>
						<option value='AD'>Administration</option>
						<option value='CH'>Cedar Hill</option>
						<option value='CL'>Clothing</option>
						<option value='DW'>Dogwood</option>
						<option value='FW'>Fernwood</option>
						<option value='FG'>Forest Glen</option>
						<option value='JN'>Janitorial</option>
						<option value='MG'>Magnolia</option>
						<option value='MP'>Maple Point</option>
						<option value='OG'>Oak Grove</option>
						<option value='SS'>Sunshine</option>
						<option value='SC'>Swaying Cypress</option>
						<option value='UL'>Unlisted</option>
						<option value='WW'>Weeping Willows</option>
						<option value='WP'>Whispering Pines</option>
						<option value='WN'>Woodlea North</option>
						<option value='WS'>Woodlea South</option>
						</select>
	 		Cottage </label>";
	  echo "</div>";
	  echo "<div class='form-group'>";
	  echo "<label><select class='form-control' name = 'shift' value = '".$row["shift_idnum"]."' /> Shift 
	  					<option value='".$row["shift_idnum"]."' >'".$row["shift_idnum"]."'</option>
						<option value=1>A</option>
						<option value=2>B</option>
						<option value=3>C</option>
						</select>
			Shift </label>";
	  echo "</div>";
	  echo "<div class='form-group'>";
	  echo "<label><select class='form-control' name = 'active' value = '".$row["active_idnum"]."' /> Active 
	  					<option value='".$row["active_idnum"]."' >'".$row["active_idnum"]."'</option>
						<option value=1>Active</option>
						<option value=2>Not Active</option>
						</select>
			Active </label>";
	  echo "</div>";
	  echo "<div class='form-group'>";
	  echo "<label><select class='form-control' name = 'pin' value = '".$row["pin_idnum"]."' /> Pin ID
	  					<option value='".$row["pin_idnum"]."' >'".$row["pin_idnum"]."'</option>
	  					<option value=1>Pin 1</option>
						<option value=2>Pin 2</option>
						<option value=3>Pin 3</option>
						<option value=4>Pin 4</option>
						<option value=5>Pin 5</option>
						<option value=6>Pin 6</option>
						<option value=7>Pin 7</option>
						</select>
	  		Pin </label>";
	  echo "</div>";

	   echo"</td>
			</table>";

	  echo "<p><input class='btn btn-info' type = 'submit' name = 'submitted' value = 'Change' />";
	  echo "</form>";
	 echo "<div >
		<a href='delete_editEmployeeMGMT.php' class='btn btn-secondary btn-lg active' role='button' >Employee Offense/Discipline</a>
		</div>
		<br>
		<a href='managementMenu.php'>Back to Menu</a>";

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