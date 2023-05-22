<?php
require 'config.php';
		
  $username= $_POST["name"];
  $feedback =$_POST["comment"];

  $sql = "insert into feedback(username,feedback)values ('$username','$feedback')"; 
  
  if (mysqli_query($conn,$sql)){
	  echo "your response has been submitted";
	  header ("Location:feedback.html");
  }
  else {
	  echo "Error! Your response has not been submitted";
  }

  $conn->close();
?>