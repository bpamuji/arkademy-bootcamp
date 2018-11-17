<?php
	$server = "localhost";
	$username = "your db username";
	$password = "your db password";
	$database = "your db name";

	$dbconnect = mysqli_connect($server,$username,$password,$database) or die("Cant connect to database");
?>
