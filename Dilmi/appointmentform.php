<?php
SESSION_start();
	$con= mysqli_connect('localhost','root','','form');		
	
	if (isset($_POST['submit']))
	{
		$donorID = $_POST['DID'];
		$date = date('Y-m-d', strtotime($_POST['Date']));
		$time = $_POST['Time'];
		$location = $_POST['Location'];
		
		$query = "insert into appointment(DID,Date,Time,Location)values ($donorID',$date','$time',$location)"; 
		$query_run = mysqli_query($con,$query);
		
		if($query_run)
		{
			$_SESSION['status'] = "Submission successful";
			header ("Location:appointmentform.php");
		}
		else 
		{
			echo "Error! Your response has not been submitted";
		}
	}
  
?>




