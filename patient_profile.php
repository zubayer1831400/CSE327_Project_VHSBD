<!DOCTYPE html>
<html>
<head>
	<title>VHSBD</title>
	<link href="https://fonts.googleapis.com/css2?family=Cabin&family=Montserrat&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet"
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500&family=Roboto:wght@300&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="uip.css">
</head>

<?php

$MySQLi_connection= new MySQLi('localhost','root','','project_vhsbd');

if(MySQLi_connect_error())
{
    die('Connect Error('.MySQLi_connect_errno().')'.MySQLi_connect_error());
}
session_start();
$id=$_SESSION['id'];
$query = "SELECT * FROM patient_registration where Username='$id'";
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
			<p class="Services">Personnal Information (Patient)</p>
			<div class ="wrapper">
				<div>
					<p class="Type">Name</p>
	    	        <input type="text" name ="fname"  placeholder="" value="<?php echo $row['Name']; ?>" required>
	    	        <p class="Type">Date of Birth</p>
                    <input type="text" name ="dob"  placeholder="" value="<?php echo $row['Date_of_Birth']; ?>" required>
                    <p class="Type">Contact no.</p>
	    	        <input type="text" name ="num"  placeholder="" value="<?php echo $row['ContactNo']; ?>" required>
	    	        <p class="Type">Email</p>
                    <input type="email" name ="email"  placeholder="" value="<?php echo $row['Email']; ?>" required>
                    <p class="Type">Address</p>
	    	        <input type="text" name ="address"  placeholder="" value="<?php echo $row['Address']; ?>" required><br>
	    	        <button class="button2" name ="update">Update Profile</button><br>
	    	        <button class="button2" name = "logout" ><a href="p_logout.php">Logout</a></button>
				</div>
				<div class="pic">
					<form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <br>
                    <input type="submit" value="Upload Image" name="submit">
                    </form>
				</div>
			</div>
			
          <p class="Services">VHSBD Services</p>
          <p class ="Services">1) Appoinment</p>
          <p class ="description">
          Take an appoinment with your preferable Dr from VHSBD
          </p>
          <button class="button2"><a href="appointment.html">Appoinment</a></button>
          <p class ="Services">2)Medicine Store</p>
          <p class ="description">
           Buy your necessary medicines from VHSBD medicine store showing prescription
          </p>
           <button class="button2"><a href="medicine.html">Buy Medicine</a></button>
          <p class ="Services">3)Emergency Service</p>
          <p class ="description">
          You can call 00000 for any emergency service 24/7
          </p>
          <p class ="Services">4) Ambulance Service</p>
          <p class ="description">
           You can call 00000 for any emergency service 24/7
          </p>


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

        $query = "UPDATE patient_registration SET Name = '$fullname',
                      Gender = '$gender', ContactNo = '$mnum', Email = '$email', Date_of_Birth ='$dob', Address = '$address'
                      WHERE Username = '$id'";
                      $result = mysqli_query($MySQLi_connection, $query);
                      

    ?>
    <script type="text/javascript">
            alert("Profile Update Successful.");
            window.location = "patient_profile.php";
        </script>
        <?php
}
    ?>  