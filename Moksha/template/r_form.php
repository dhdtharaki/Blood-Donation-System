<?php

// Create connection
$conn = new mysqli('localhost', 'root','', 'blooddonationsystem');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$r_formfirstname = $_POST['R_fname'];
$r_formlastname= $_POST['R_lname'];
$r_formusername = $_POST['R_uname'];
$r_formemail = $_POST['R_email'];
$r_formpassword = $_POST['R_password'];
$r_formconfirmpassword = $_POST['R_confirmp'];
$r_formnic = $_POST['R_nic'];
$r_formage = $_POST['R_age'];
$r_formgenderdetails = $_POST['R_genderD'];
$r_formbloodtype = $_POST['R_bloodtype'];
$r_formaddress = $_POST['R_address'];
$r_formcontactnumber = $_POST['R_contactno'];
$r_formhaveanydiesases = $_POST['R_haveanydiesases'];


$sql = $conn -> prepare("insert into r_form(R_fname,R_lname,R_uname,R_email,R_password,R_confirmp,R_nic,R_age,R_genderD,R_bloodtype,R_address,R_contactno,R_haveanydiesases)values ('$r_formfirstname','$r_formlastname','$r_formusername','$r_formemail','$r_formpassword','$r_formconfirmpassword','$r_formnic','$r_formage','$r_formgenderdetails','$r_formbloodtype','$r_formaddress','$r_formcontactnumber','$r_formhaveanydiesases')");


if ($conn -> query($sql)) {
  echo "Your Responce has bee submitted";
  header("Location:userform.html");
} else {
  echo "Error! Your responce has ot bee submitted";
}
mysqli_close($conn);

?>