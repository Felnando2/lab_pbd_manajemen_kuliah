<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "tugas";

	$connect = new Mysqli($servername, $username, $password, $dbname);

	if ($connect->connect_error) {
		die("Connection Failed: " .mysqli_connect_error());
	} else{
		echo "Successfully Connected";
	}
?>