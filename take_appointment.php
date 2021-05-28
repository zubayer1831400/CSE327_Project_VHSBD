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
	<link rel="stylesheet" type="text/css" href="appoinment.css">
</head>
<body>
	<div class="Header">
		<div class="logo">
			<img class="logopic" 
			src ="logo.png" alt="My sample image" height="100">
			
		</div>
		<div class ="navbar">
			<nav>
     <ul class="navlinks">
     	<li><a class="active" href="home.html">Home</a></li>
     	<li><a href="#">Contact Us</a></li>
     	<li><a href="#">Feedback</a></li>
     	<li><a href="patient_login.html">Login</a></li>
     	<li><a href="patient_signup.html">Sign Up</a></li>	
     </ul>	
	</nav>
	</div>
	</div>
	<form action="#" method="POST">
	<div class="mainbody">
		<div class="box">
		    <p class="account">Request for an Appoinment</p>   
		 </div>   
	    <div class="Container">

	    	<div class="Wrapeer1">
	    	<div>	
	    	    <p class="Type">Name</p>
	    	    <input type="text" name ="fname" required placeholder="Enter Your Name">
            <p class="Type">Gender</p>
            <select class ="select" name="gender" required>
            <option disabled selected>Choose Gender</option>
      		  <option value="male">Male</option>
            <option value="female">Female</option>
      	    </select>	
        </div>

        <div>	
	    	    <p class="Type">Contact no.</p>
	    	    <input type="text" name ="contact" required placeholder="Enter Your Phone Number">	
      	    <p class="Type">Date of Birth</p>
      	    <input type ="date" name="dateOfBirth" required>
        </div>
        <div class="Adress">
            <p class="Type">E-mail Address</p>
            <input type="email" name ="email" required placeholder="Enter Your Adress">    
        </div>
        <div>
            <p class="Type">Prefarable Time</p>
            <select class ="select" name="time" required>
            <option disabled selected>Prefarable Time</option>
            <option value="9:00  am">9:00 am</option>
            <option value="10:00 am">10:00 am</option>
            <option value="11:00 am">11:00 am</option>
            <option value="12:00 pm">12:00 pm</option>
            <option value="1:00  pm">1:00 pm</option>
            <option value="2:00  pm">2:00 pm</option>
            <option value="3:00  pm">3:00 pm</option>
            <option value="4:00  pm">4:00 pm</option>
            <option value="5:00  pm">5:00 pm</option>
            <option value="6:00  pm">6:00 pm</option>
            <option value="7:00  pm">7:00 pm</option>
            <option value="8:00  pm">8:00 pm</option>
            <option value="9:00  pm">9:00 pm</option>
            <option value="9:00  pm">10:00 pm</option>
            <option value="9:00  pm">11:00 pm</option>
      	    </select>
            
        </div>
            <div>
            <p class="Type">Prefarable Day </p>
            <select class ="select" name="day" required>
            <option disabled selected>Prefarable Time</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
            <option value="Sunday">Sunday</option>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            
      	    </select>	
            </div>
            <div>
              <p class="Type">Fees</p>
            <input type="text" name ="fee" value="450 TK (BDT)" disabled>
            </div>
            </div>
         <br>   
         <p class="type">Select Your Doctor</p>   
         <br>
         <div class="Wrapeer2">
         	<div>
            <p class="Type">Doctor Name</p>
            <select class ="select" name="docname" required>
            <option disabled selected>Choose your doctor</option>
      		<option value="Dr.Abu Nasir Rizvi">Dr.Abu Nasir Rizvi</option>
            <option value="Dr.Afia Anan">Dr.Afia Anan</option>
            <option value="Dr.Rizwan Ahmed">Dr.Rizwan Ahmed</option>
            <option value="Dr.Akib Mahmood">Dr.Akib Mahmood</option>
            <option value="Dr.Ashraf Hossain">Dr.Ashraf Hossain</option>
            <option value="Dr.Latifur Rahman">Dr.Latifur Rahman</option>
            <option value="Dr.Minhazul Abedin">Dr.Minhazul Abedin</option>
            <option value="Dr.Mosharrof Hossain">Dr.Mosharrof Hossain</option>
            <option value="Dr.Nazmul Hasan">Dr.Nazmul Hasan</option>
            <option value="Dr.Rafiya Tabassum">Dr.Rafiya Tabassum</option>
            <option value="Dr.Redwanul Islam">Dr.Redwanul Islam</option>
            <option value="Dr.Rakibul Hasan">Dr.Rakibul Hasan</option>
            
      	    </select>	
            </div>

            <div>
            <p class="Type">Specialization</p>
            <select class ="select" name="specialization" required>
            <option disabled selected>Choose Specialization</option>
      		<option value="Cardiology">Cardiology</option>
            <option value="Neurology">Neurology</option>
            <option value="Psychiatry">Psychiatry</option>
            <option value="Respiratory medicine">Respiratory medicine</option>
            <option value="Rheumatolog">Rheumatology</option>
            <option value="Nephrology">Nephrology</option>
            <option value="Endocrinology and Metabolism">Endocrinology and Metabolism</option>
            <option value="Dermatology and Venereology">Dermatology and Venereology</option>
            <option value="Gastroenterology">Gastroenterology</option>
            <option value="Hepatology">Hepatology</option>
            <option value="Hematology">Hematology</option>
            <option value="Oncology">Oncology</option>
            <option value="Internal Medicine"> Internal Medicine</option>
      	    </select>	
            </div>	
	    </div>
	

            
            <div class="Wrapeer3">
	        <div>	
	    	<button class="button" name='req'>Request for appoinment</button>
	    	</div>
	        </div>
	       
	     </div>  
	</form>

</body>
</html>

<?php
if(isset($_POST['req'])){
$fullName = $_POST['fname'];
$gender = $_POST['gender'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$dateOfBirth = $_POST['dateOfBirth'];
$preftm = $_POST['time'];
$prefd = $_POST['day'];
$doc = $_POST['docname'];
$specialization = $_POST['specialization'];

$MySQLi_connection= new MySQLi('localhost','root','','project_vhsbd');

if(MySQLi_connect_error())
{
    die('Connect Error('.MySQLi_connect_errno().')'.MySQLi_connect_error());
}
else{

	$insert = "INSERT INTO `appointment`(`Name`, `ContactNo`, `Gender`, `Date_of_Birth`, `Email_Address`, `Preferable_Time`, `Preferable_Day`, `Doctor_Name`, `Specialization`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
	$stmnt = $MySQLi_connection->prepare($insert);
	$stmnt->bind_param("sisssssss", $fullName, $contact, $gender, $dateOfBirth, $email, $preftm, $prefd, $doc, $specialization);

	$stmnt->execute();
	?>
	 <script type="text/javascript">
            alert("Appointment Booked Successfully");
            window.location = "take_appointment.php";
        </script>
        <?php

  $stmnt->close();
  $MySQLi_connection->close();

}
}

?>