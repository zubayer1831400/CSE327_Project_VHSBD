<!DOCTYPE html>
<html>
<head>
	<title>VHSBD</title>
	<link href="https://fonts.googleapis.com/css2?family=Cabin&family=Montserrat&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500&family=Roboto:wght@300&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="uid.css">
</head>
<?php

$MySQLi_connection= new MySQLi('localhost','root','','project_vhsbd');

if(MySQLi_connect_error())
{
    die('Connect Error('.MySQLi_connect_errno().')'.MySQLi_connect_error());
}
session_start();
$id=$_SESSION['id'];
$query = "SELECT * FROM doctor_registration where Username='$id'";
$result = mysqli_query($MySQLi_connection, $query);  
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  

?>
<body>
	<div class="Header">
		<div class="logo">
			<img class="logopic" 
			src ="logo.png" alt="My sample image" height="100">
			
		</div>
		<div class ="navbar">
			<nav>
     <ul class="navlinks">
     	<li><a class="active" href="#">Home</a></li>
     	<li><a href="#">Contact Us</a></li>
     	<li><a href="#">Feedback</a></li>
     	<li><a href="#">Login</a></li>
     	<li><a href="#">Sign Up</a></li>	
     </ul>	
	</nav>
	</div>
	</div>

	<form action="#" method="POST">
		<div class ="Container">
			<p class ="welcome">Welcome to your VHSBD account</p>
			<p class="Services">Personnal Information (Doctor)</p>
			<div class ="wrapper">
				<div>
					<p class="Type">Name</p>
	    	        <input type="text" name ="fname" placeholder="" value="<?php echo $row['FullName']; ?>" required>
	    	        <p class="Type">Date of Birth</p>
                    <input type="text" name ="dob"  placeholder="" value="<?php echo $row['Date_of_Birth']; ?>" required>
                    <p class="Type">Contact no.</p>
	    	        <input type="text" name ="num"   placeholder="" value="<?php echo $row['ContactNo']; ?>" required>
	    	        <p class="Type">Email</p>
                    <input type="email" name ="email"  placeholder="" value="<?php echo $row['Email']; ?>" required>
                    <p class="Type">Address</p>
	    	        <input type="text" name ="address"  required placeholder="" value="<?php echo $row['Address']; ?>" required>
	    	        <p class="Type">Specialization</p>
                    <input type="text" name ="specialization" value="<?php echo $row['Specialization']; ?>" required required>
                    <p class="Type">Prefarable Time (From)</p>
                    <input type="text" name = "from" value="<?php echo $row['AvailableTime_(From)']; ?>" required required>
                    <p class="Type">Prefarable Time (To)</p>
                    <input type="text" name = "t0" value="<?php echo $row['AvailableTime_(To)']; ?>" required required>	
                    <p class="Type">Prefarable Day </p>
                    <input type="text" name = "day" value="<?php echo $row['AvailableDay']; ?>" required required>
                    <p class="Type">Qualification</p>
                    <input type="text" name ="qualifications"placeholder="Enter Your Qualification " value="<?php echo $row['Degree_&_Qualification']; ?>" required>
                    <p class="Type">Educational Institution</p>
	    	        <input type="text" name ="eduins" placeholder="Enter Your Institution Name" value="<?php echo $row['Educational_Institution']; ?>" required>
	    	        <p class="Type">BMDC Reg.</p>
	    	        <input type="text" name = "bmdcreg" placeholder="Enter Your BMDC Reg." value="<?php echo $row['BMDC_Registration']; ?>" required><br>
	    	        <button class="button2" name ="update">Update Profile</button><br>
	    	        <button class="button2" name = "logout" ><a href="d_logout.php">Logout</a></button>
				</div>
				<div class="pic">
					<form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <br>
                    <input type="submit" value="Upload Image" name="submit">
                    </form>
				</div>
			</div>
			
          
          <button class="button2" name='chk'><a href="my_appointment.php">Check Appoinment</a></button>
          
           
		</div>	
	
	       
	</form>     
	

</body>
</html>
<?php

if(isset($_POST['update'])){
        $fullname = $_POST['fname'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $mnum = $_POST['num'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $specialization = $_POST['specialization'];
        $preftmf = $_POST['from'];
        $preftmt = $_POST['t0'];
        $prefd = $_POST['day'];
        $qualf = $_POST['qualifications'];
        $eduins = $_POST['eduins'];
        $bmdcreg = $_POST['bmdcreg'];

      $query = "UPDATE doctor_registration SET FullName = '$fullname', Gender = '$gender', ContactNo = '$mnum', Email = '$email', Date_of_Birth ='$dob', Address = '$address', Educational_Institution = '$eduins', BMDC_Registration = '$bmdcreg', Specialization = '$specialization', Degree_&_Qualification = '$qualf', AvailableTime_(From) = '$preftmf', AvailableTime_(To) = '$preftmt', AvailableDay = '$prefd'  
                      WHERE Username = '$id'";
                     $result = mysqli_query($MySQLi_connection, $query); 
?>
<script type="text/javascript">
            alert("Profile Update Successful.");
            window.location = "doctor_profile.php";
        </script>
        <?php
}

if(isset($_POST['chk']))
{
  session_start();
$_SESSION['id'] = $row['FullName'];
header('Location: my_appointment.php');

}
?>

