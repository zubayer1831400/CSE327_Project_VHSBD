<?php

$fullName = $_POST['fname'];
$contactNo = $_POST['number'];
$email = $_POST['email'];
$dateOfBirth = $_POST['dateOfBirth'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$username = $_POST['uname'];
$password = $_POST['pass'];

$MySQLi_connection= new MySQLi('localhost','root','','project_vhsbd');

if(MySQLi_connect_error())
{
    die('Connect Error('.MySQLi_connect_errno().')'.MySQLi_connect_error());
}
else{
	$insert = "INSERT INTO `patient_registration`(`Name`, `ContactNo`, `Email`, `Date_of_Birth`, `Gender`, `Address`, `Username`, `Password`) 
	VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
	$stmnt = $MySQLi_connection->prepare($insert);
	$stmnt->bind_param("sissssss", $fullName, $contactNo, $email, $dateOfBirth, $gender, $address, $username, $password);

	$stmnt->execute();
   echo "You have completed Registration Successfully";

  $stmnt->close();
  $MySQLi_connection->close();
}

?>
?>