<?php
	require_once('/home/badavis/DBdavis.php');
	$mysqli = new mysqli(DBHOST,USERNAME,PASSWORD,DBNAME);

	if($mysqli->connect_errno) {
		die("Could not connect to server ".DBHOST."<br/>");
	}
	else{
		echo "Successful connection";
	}