<?php

$fullName = $_POST['fname'];
$contactNo = $_POST['number'];
$email = $_POST['email'];
$dateOfBirth = $_POST['dateOfBirth'];
$gender = $_POST['gender'];
$specialization = $_POST['specialization'];
$avltmfrom = $_POST['from'];
$avltmto = $_POST['to'];
$avlday = $_POST['day'];
$address = $_POST['address'];
$degqual = $_POST['qualifications'];
$eduins = $_POST['eduins'];
$bmdcreg = $_POST['bmdcreg'];
$username = $_POST['uname'];
$password = $_POST['pass'];


$MySQLi_connection= new MySQLi('localhost','root','','project_vhsbd');

if(MySQLi_connect_error())
{
    die('Connect Error('.MySQLi_connect_errno().')'.MySQLi_connect_error());
}
else{
	$insert = "INSERT INTO `doctor_registration`(`FullName`, `Gender`, `ContactNo`, `Email`, `Date_of_Birth`, `Address`, `Educational_Institution`, `BMDC_Registration`, `Specialization`, `Degree_&_Qualification`, `AvailableTime_(From)`, `AvailableTime_(To)`, `AvailableDay`, `Username`, `Password`) 
	VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
	$stmnt = $MySQLi_connection->prepare($insert);
	$stmnt->bind_param("ssissssssssssss", $fullName, $gender, $contactNo, $email, $dateOfBirth, $address, $eduins, $bmdcreg, $specialization,
	 $degqual, $avltmfrom, $avltmto, $avlday, $username, $password);

	$stmnt->execute();
   
?>
<script type="text/javascript">
            alert("You have completed Registration Successfully");
            window.location = "doctor_login.html";
        </script>
<?php
  $stmnt->close();
  $MySQLi_connection->close();
}

?>
