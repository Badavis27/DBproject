
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

<body style="background-color: #EDEAE5">


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

	$sqlinsert = "UPDATE employee SET cottage_idnum = '$cottage', shift_idnum ='$shift' WHERE employee_idnum =" .$idnum;
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

	  echo "<p><form action = 'editStaff.php?id={$ID}' method='post'>";
	  echo "<div class='form-group'>";
	  echo "<label><input class='form-control'  type = 'text' name = 'id' value = '".$row["employee_idnum"]."' /> Employee ID</label>";
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
	


	  echo "<p><input class='btn btn-info' type = 'submit' name = 'submitted' value = 'Change' />";
	  echo "</form>";
	 echo "<div >
		<a href='editEmployeeStaff.php' class='btn btn-secondary btn-lg active' role='button' >Edit Employee </a>
		</div>
		<br>
		<a href='staffMenu.php'>Back to Menu</a>";

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