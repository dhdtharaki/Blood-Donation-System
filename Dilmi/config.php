<?php
	$conn= new mysqli('localhost','root','','blooddonationsystem');		
	
	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);}
?>