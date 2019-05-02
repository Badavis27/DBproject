<?php
//https://www.youtube.com/watch?v=qy2-d8uAn2k


require_once('connect.php');
if (isset($_POST['submitted'])) {

	$idnum = mysqli_real_escape_string($mysqli,$_POST['idnum']);
	$training_idnum = mysqli_real_escape_string($mysqli,$_POST['training_idnum']);
	$notes = mysqli_real_escape_string($mysqli,$_POST['notes']);
	$fromDate = mysqli_real_escape_string($mysqli,$_POST['fromDate']);
	$toDate = mysqli_real_escape_string($mysqli,$_POST['toDate']);
	

	$sqlinsert = "INSERT into employee_training (employee_idnum, training_idnum, training_notes, from_date_training, to_date_training ) values ('$idnum', '$training_idnum', '$notes', '$fromDate', '$toDate')";
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
	<form method="post" action="addEmployee_Training.php">
		<input type="hidden" name="submitted" value="true" />

			<fieldset>
				<legend>New Employee Training</legend>
				<div class="form-group">
					<label>Employee ID: <input class="form-control" type="text" name="idnum"/> </label>
				</div>
				<div class="form-group">
					
					<label>Training
						<select class="form-control" name="training_idnum">
						<option value=1>ATT Training</option>
						<option value=2>Judevine</option>
						<option value=3>Other</option>
						<option value=4>Position Upgrade</option>
						<option value=5>Staff Training</option>
						<option value=6>Supervisor Training</option>
						</select>
					</label>
				</div>
				<div class="form-group">
					<label>Notes: <textarea class="form-control" type="text" name="notes"/> </textarea></label>
				</div>
				<div class="form-group">
					<label>From Date: <input class="form-control" type="text" name="fromDate" placeholder="YYYY-MM-DD"/> </label>
				</div>
				<label>To Date: <input class="form-control" type="text" name="toDate" placeholder="YYYY-MM-DD"/> </label>
			</fieldset>
		<br>
		<br>
		<input class="btn btn-info" type="submit" name="submitted" value="add new Training"/>
	</form>
	<br>
	<div >
	<a href="delete_editEmployee_Training.php" class="btn btn-secondary btn-lg active" role="button" >Employee Training</a>
	</div>
	<br>
	<a href='adminMenu.php'>Back to Menu</a>

</div>
</body>

</html>
