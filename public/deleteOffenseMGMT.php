<?php



require_once('connect.php');

if(isset($_GET['id']) && $_GET['id']!=""){

	 $ID = $_GET['id'];
	 $query = "DELETE from employee_offense_and_discipline WHERE OD_idnum =" .$ID;

	 $result = $mysqli->query($query);

	 if ($result && mysqli_affected_rows($mysqli) === 1){
	 	header("Location: delete_editEmployee_Offense_DisciplineMGMT.php");
		exit;
	 }
	 


}

?>