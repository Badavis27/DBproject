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

	

	$id = mysqli_real_escape_string($mysqli,$_POST['id']);
	$e_id = mysqli_real_escape_string($mysqli,$_POST['e_id']);
	$T_typeid = mysqli_real_escape_string($mysqli,$_POST['T_typeid']);
	$notes = mysqli_real_escape_string($mysqli,$_POST['notes']);
	$from = mysqli_real_escape_string($mysqli,$_POST['from']);
	$to = mysqli_real_escape_string($mysqli,$_POST['to']);
	

	$sqlinsert = "UPDATE employee_training SET T_idnum = '$id',  employee_idnum ='$e_id', training_idnum ='$T_typeid', training_notes = '$notes', from_date_training = '$from', to_date_training = '$to' WHERE T_idnum =" .$id;
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

	

	$query = "SELECT T_idnum, employee_idnum, training_idnum, training_notes, from_date_training, to_date_training, employee_fname, employee_lname FROM employee_training NATURAL JOIN employee WHERE T_idnum =" .$ID;


  $result = $mysqli->query($query);
	

	if($result) {
	 $row = $result->fetch_assoc();

	  echo "<div align ='center' class='container center_div'>";
	  echo "<h3>".$row["employee_fname"]." ".$row["employee_lname"]."'s Training</h3>";

	  echo "<p><form action = 'editTraining.php?id={$ID}' method='post'>";

	  echo "<div class='form-group'>";
	  echo "<label><input class='form-control' type = 'text' name = 'id' value = '".$row["T_idnum"]."' />T ID</label>";
	  echo "</div>";
	  echo "<div class='form-group'>";
	  echo "<label><input class='form-control' type = 'text' name = 'e_id' value = '".$row["employee_idnum"]."' />Employee ID</label>";
	  echo "</div>";
	  echo "<div class='form-group'>";
	  echo "<label> <select class='form-control' type = 'text' name = 'T_typeid' value = '".$row["training_idnum"]."'> 
	  					<option value='".$row["training_idnum"]."' >'".$row["training_idnum"]."'</option>
						<option value=1>ATT Training</option>
						<option value=2>Judevine</option>
						<option value=3>Other</option>
						<option value=4>Position Upgrade</option>
						<option value=5>Staff Training</option>
						<option value=6>Supervisor Training</option>
						</select>

	  Training </label>";
	  echo "</div>";
	  echo "<div class='form-group'>";
	  echo "<label><input class='form-control' type = 'text' name = 'notes' value = '".$row["training_notes"]."' />Notes</label>";
	  echo "</div>";
	  echo "<div class='form-group'>";
	  echo "<label><input class='form-control' type = 'text' name = 'from' value = '".$row["from_date_training"]."' />From Date</label>";
	  echo "</div>";
	  echo "<div class='form-group'>";
	  echo "<label><input class='form-control' type = 'text' name = 'to' value = '".$row["to_date_training"]."' />To Date</label>";
	  echo "</div>";
	  
	  echo "<p><input class='btn btn-info' type = 'submit' name = 'submitted' value = 'Change' />";
	  echo "</form>";
	 echo "<div >
			<a href='delete_editEmployee_Training.php' class='btn btn-secondary btn-lg active' role='button' >Employee Offense/Discipline</a>
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
