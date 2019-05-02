<?php



require_once('connect.php');

if(isset($_GET['id']) && $_GET['id']!=""){

	 $ID = $_GET['id'];
	 $query = "DELETE from employee WHERE employee_idnum =" .$ID;

	 $result = $mysqli->query($query);

	 if ($result && mysqli_affected_rows($mysqli) === 1){
	 	echo "<h3>Person succesfully deleted</h3>";
	 	//echo "<br /><br /><p>&laquo:<a href='readEmployee.php'>Back to Main Page</a>";
	 	header("Location: delete_editEmployee.php");
		exit;
	}
	 


}

?>