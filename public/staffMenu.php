

<?php
require_once('connect.php');
require_once('session.php');
require_once('functions.php');

//verify_login();

?>





<!DOCTYPE html>
<html >
	<head> <title> Staff Menu</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<!--<link rel="stylesheet" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
	</head>

	<body style="background-color: #EDEAE5">
		<br>
		<br>
		<div style="background-color:#EDEAE5">
			<h1 align="center">Staff Menu</h1>
		</div>
		<br>
		<br>
		<br>
		<br>
		<div style="background-color: #026670; width:75%; margin-left:auto; margin-right: auto; padding: 40px;" class="rounded" align ="center">
		<a href="addEmployeeStaff.php" class="btn btn-light btn-lg active" role="button" >Add Employee Information</a>
		<br> 
		<br>
		<a href="addEmployee_Offense_DisciplineStaff.php" class="btn btn-light btn-lg active" role="button" >Add Employee Offense/Discipline</a>
		<br> 
		<br>
		<a href="addEmployee_TrainingStaff.php" class="btn btn-light btn-lg active" role="button" >Add Employee Training</a>
		<br> 
		<br>
		<a href="readEmployee_Offense_Discipline.php" class="btn btn-light btn-lg active" role="button" >Employee Offense/Discipline</a>
		<br> 
		<br>
		<a href="readEmployee_Training.php" class="btn btn-light btn-lg active" role="button" >Employee Training</a>
		<br> 
		<br>
		<a href="editEmployeeStaff.php" class="btn btn-light btn-lg active" role="button" >Edit Employee </a>
		<br>
		<br>
		<br>
		<a href='index.php'>Logout</a>
		</div>
	</body>


</html>