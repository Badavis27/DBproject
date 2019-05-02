<?php



require_once('connect.php');

if(isset($_GET['id']) && $_GET['id']!=""){

	 $ID = $_GET['id'];
	 $query = "DELETE from login WHERE id =" .$ID;

	 $result = $mysqli->query($query);

	 if ($result && mysqli_affected_rows($mysqli) === 1){
	 	header("Location: addLogin.php");
		exit;
	 }
	 


}

?>