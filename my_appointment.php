<!DOCTYPE html>
	<html>
	<head>
		<title>VHSBD</title>
	</head>

<?php

$MySQLi_connection= new MySQLi('localhost','root','','project_vhsbd');

if(MySQLi_connect_error())
{
    die('Connect Error('.MySQLi_connect_errno().')'.MySQLi_connect_error());
}
session_start();

$dname=$_SESSION['id'];
$query = "SELECT * FROM appointment where Doctor_Name='$dname'";
$result = mysqli_query($MySQLi_connection, $query);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

?>

	<body>
	<form action="doctor_profile.php">
 <fieldset>
  <legend>Appointment</legend>
  <label for="fname">Patient Name:</label>
  <input type="text" id="fname" name="pname" value="<?php echo $row['Name']; ?>"><br><br>
  <label for="lname">Gender:</label>
  <input type="text" id="lname" name="gender" value="<?php echo $row['Gender']; ?>"><br><br>
  <label for="lname">Date of Birth:</label>
  <input type="date" id="lname" name="dob" value="<?php echo $row['Date_of_Birth']; ?>"><br><br>
  <label for="lname">Contact No:</label>
  <input type="text" id="lname" name="contact" value="<?php echo $row['ContactNo']; ?>"><br><br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" value="<?php echo $row['Email_Address']; ?>"><br><br>
  <label for="birthday">Preferable Time:</label>
  <input type="text" id="birthday" name="preft" value="<?php echo $row['Preferable_Time']; ?>"><br><br>
  <label for="lname">Preferable Day:</label>
  <input type="text" id="lname" name="prefd" value="<?php echo $row['Preferable_Day']; ?>"><br><br>
  
 </fieldset>
</form>
	</body>
	</html>	