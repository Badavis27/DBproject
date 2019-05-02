<?php 
require_once('connect.php');
require_once('session.php');
require_once('functions.php');
session_start();


if (($output = message()) !== null) {
	echo $output;
}

if (isset($_POST['submit'])) {
	
	if (isset($_POST['username']) && $_POST['username'] !== "" && isset($_POST['password']) && $_POST['password'] !== "") {

		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "SELECT * FROM ";
		$query .= "login WHERE ";
		$query .= "username = '".$username."' ";
		$query .= "LIMIT 1";

		$result = $mysqli->query($query);
		//echo $result;

		echo "wrong3";
		if ($result && $result->num_rows > 0) {
			$row = $result->fetch_assoc();
			if (password_check($password, $row['hashed_password']) && $row['permission'] == 1) {
				$_SESSION['username'] = $row['username'];
				$_SESSION['login_id'] = $row['id'];
				header("Location: adminMenu.php");
				exit;
			}
			else if(password_check($password, $row['hashed_password']) && $row['permission'] == 2) {
				$_SESSION['username'] = $row['username'];
				$_SESSION['login_id'] = $row['id'];
				header("Location: managementMenu.php");
				exit;
			}
			else if(password_check($password, $row['hashed_password']) && $row['permission'] == 3) {
				$_SESSION['username'] = $row['username'];
				$_SESSION['login_id'] = $row['id'];
				header("Location: staffMenu.php");
				exit;
			}
			else {
				echo "wrong1";
				$_SESSION['message'] = "Username/Password not found";
				header("Location: index.php");
				exit;
			}
		}
		else {
			echo "worng2";
			$_SESSION['message'] = "Username/Password not found";
			header("Location: index.php");
			exit;
		}
	}
}

?>

<!DOCTYPE html>
<html>


	<head> <title>Employee Data</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	</head>

<body style="background-color: #EDEAE5">
<br>
<br>
<div align="center">
<h1>Resident Living Database</h1>
<br>
<form action="index.php" method="post">
	<p>Username:
		<input type="text" name="username" />
	</p>
	<p>Password:
		<input type="password" name="password" value="" />
	</p>
	<input type="submit" name="submit" value=Login class="btn btn-info" />
</form>
</div>

</body>
