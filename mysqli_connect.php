<?php
	
	$host="localhost";
	$user="root";
	$password="";
	$database="messages";
	
	$dbc=mysqli_connect("localhost", "root", "", "messages");
	if (!$dbc) {
		echo "Error: " . mysqli_connect_error(); 
		echo "Error: " . mysqli_connect_errno(); 
	}
?>