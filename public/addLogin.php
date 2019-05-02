
<?php require_once("session.php");
	  require_once('connect.php');
	 session_start();

	require_once("functions.php");

	if(($output = message())  !== null) {
		echo $output;
	}

	//verify_login();



	if (isset($_POST["submit"])) {
		//echo "submit";
		if (isset($_POST["username"]) && $_POST["username"]  !== "" &&
		isset($_POST ["password"]) && $_POST["password"] !== ""){
			//echo "username & password";

			$username = $_POST["username"];
			$password = password_encrypt($_POST["password"]);
			$permission = $_POST["permission"];

			$query = "SELECT * FROM ";
			$query .= "login WHERE ";
			$query .= "username = '".$username."' ";
			$query .= "LIMIT 1";
			echo $query;

			$result = $mysqli->query($query);
			

			if ($result && $result->num_rows > 0) {
				
				$_SESSION["message"] = "The username already exists";
				header("Location: addLogin.php");
				exit;
			}
			else {
				
				$query = "INSERT INTO login ";
				$query .= "(username, hashed_password, permission) ";
				$query .= "VALUES ('".$username."', '".$password."','".$permission."')";
				echo $query;
				$result = $mysqli->query($query);
				echo $reslut;
				if ($result) {
					
					$_SESSION["message"] = "User successfully added";
					header("Location: addLogin.php");
					exit;
				}
				else {
					
					$_SESSION["message"] = "Could not add user!";
					header("Location: addLogin.php");
					exit;
				}
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

	<div align="center">
	<label>

		<h3 align="center">Add User to Database</h3>


		<form align="center" action="addLogin.php" method="post">
			<p>Username:
				<input type="text" name="username" />
			</p>
			<p>Password:
				<input type="password" name="password" value="" />
			</p>
			<p>Permission
				<select name="permission">
				<option value="1">admin
				</option>

				<!--<?php/*
					$query = "SELECT permission FROM login";
					$result = $mysqli->query($query);
					if ($result && $result->num_rows > 0) {
						while ($rom = $result->fetch_assoc()) {
							echo "<option value = '".$row['permission']."'>".$row['permission']."</option>";
						}
					}
					else { echo "<h2>No query results</h2>";
				} */
				?>-->
				<option value="2"> management</option>
				<option value="3"> staff</option>
				</select>
			</p>
			<input class="btn btn-primary btn-lg active"  type="submit" name="submit" value="Submit" />
		</form>
		<br>
		<div >
			<a href="adminMenu.php" class="btn btn-secondary btn-lg active" role="button" >Back to Menu</a>
		</div>

		<p><br /><br /><hr />
			<h2>Current Database Users</h2>

			<?php
			$query ="SELECT * from login ";
			$result = $mysqli->query($query);
			if($result && $result->num_rows > 0) {
				echo "<table>";
				while($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>".$row["username"]."</td>";
					echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;<a href='deleteLogin.php? id=".$row["id"]."'>Delete</a></td>";
					echo "</tr>";
				}
			echo "</table><hr /><br /><br />";
			}
			?>
	</label>
 </div>
</body>
</html>
