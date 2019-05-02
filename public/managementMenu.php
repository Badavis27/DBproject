
<?php
require_once('connect.php');
require_once('session.php');
require_once('functions.php');



?>


<!DOCTYPE html>
<html lang="en">
	<head> <title> Management Menu</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		
	</head>

	<body style="background-color: #EDEAE5">
		<br>
		<br>
		<div style="background-color:#EDEAE5">
			<h1 align="center">Management Menu</h1>
		</div>
		<br>
		<br>
		<br>
		<br>
		<div style="background-color: #026670; width:75%; margin-left:auto; margin-right: auto; padding: 40px;" class="rounded" align ="center">
		<a href="addEmployeeMGMT.php" class="btn btn-light btn-lg active" role="button" >Add Employee Information</a>
		<br>
		<br>
		<a href="addEmployee_TrainingMGMT.php" class="btn btn-light btn-lg active" role="button" >Add Employee Training</a>
		<br>
		<br>
		<a href="addEmployee_Offense_DisciplineMGMT.php" class="btn btn-light btn-lg active" role="button" >Add Employee Offense/Discipline</a>
		<br>  
		<br>
		<a href="delete_editEmployeeMGMT.php" class="btn btn-light btn-lg active" role="button" >Edit/Delete Employee Information</a>
		<br> 
		<br>
		<a href="delete_editEmployee_Offense_DisciplineMGMT.php" class="btn btn-light btn-lg active" role="button" >Edit/Delete Employee Offense/Discipline</a>
		<br> 
		<br>
		<a href="delete_editEmployee_TrainingMGMT.php" class="btn btn-light btn-lg active" role="button" >Edit/Delete Employee Training</a>
		<br>
		<br>
		<a href='index.php'>Logout</a>
		</div>
	</body>


</html>