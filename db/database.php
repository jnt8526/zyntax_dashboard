<?php

function connectDb(){

	$servername = "localhost";
	$username = "ecomtrac_dbus1";
	$password = "4yYVwU9NsG.&";
	$dbname = 'ecomtrac_main';

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	return $conn;

}

function subscribe($email){

	$conn = connectDb();

	$sql = "INSERT INTO newsletter (email, status) VALUES ('".$email."', 'active')";

	if ($conn->query($sql) === TRUE) {

	}else {

	}

	$conn->close();

}



