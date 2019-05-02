<?php

session_start();
//require_once('connect.php');
//$query = "SELECT id from login";
//$result =  $mysqli->query($query);
//$_SESSION["id"] = $query;
function message() {
	if (isset($_SESSION["message"])){

		$output = "<div class='row>";
		$output .= "<div class='alert alert-primary'>";
		$output .= htmlentities($_SESSION["message"]);
		$output .= "</div>";
		$output .= "</div>";

		$_SESSION["message"] = null;

		return $output;
	}
	else {
		return null;
	}
}

function errors() {
	if (isset($_SESSION["errors"])) {
		$errors = $_SESSION["errors"];

		$_SESSION["errors"] = null;

		return $errors;
	}
}

function verify_login() {
	if(!isset($_SESSION["login_id"]) && $_SESSION["login_id"] === null) {
		$_SESSION["message"] = "You must login in first !";
		header("Location: home.php");
		exit;
	}
}




?>