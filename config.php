<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "kfoundation";
	
	//$servername = "localhost";
	//$username = "kachaka1_kfoundation";
	//$password = "Kfoundation@2021";
	//$dbname = "kachaka1_kfoundation";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	} 
?>