<!DOCTYPE html>
<html>
<head>
	<title>VHSBD</title>
	
	<link rel="stylesheet" type="text/css" href="receipt.css">
</head>

<?php


$MySQLi_connection= new MySQLi('localhost','root','','project_vhsbd');

if(MySQLi_connect_error())
{
    die('Connect Error('.MySQLi_connect_errno().')'.MySQLi_connect_error());
}

$query = "SELECT * FROM ambulance_service where Ambulance_id='A100'";
$result = mysqli_query($MySQLi_connection, $query);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>

<body>
	<form action="#" method="POST">
	    <div class="Container">
        <p class="right">Money Receipt</p>

          <div>
            <p class="Text">Customer Name :</p>
            <input type="text" name ="cname" placeholder="">
         
          
            <p class="Text">Customer Address :</p>
              <input type="text" name ="caddress" placeholder="">
          
		  <p class="Text">Customer Email Address :</p>
              <input type="email" name ="cemail" placeholder="">
       
            <p class="Text">Customer Contact no. :</p>
            <input type="text" name ="ccontact" placeholder="">
          
          
            <p class="Text">Ambulance_id :</p>
            <input type="text" name ="ambid" placeholder="" value="<?php echo $row['Ambulance_id']; ?>" disabled >
         
           </div>

            <p class="Text">Service Charge :</p>
            <input type="text" name ="schrge" placeholder="" value="<?php echo $row['Service_charge']; ?>" disabled required>

             <p class="Text">Service Area :</p>
            <input type="text" name ="sarea" placeholder="" value="<?php echo $row['Service_area']; ?>" disabled required>
            
            <button type="submit" name="cnfrm" onclick="window.print()">Confirm</button>
            </div> 
      
  </form>

</body>
</html>

<?php

if(isset($_POST['cnfrm'])){

$cname = $_POST['cname'];
$caddress = $_POST['caddress'];
$cemail = $_POST['cemail'];
$ccontact = $_POST['ccontact'];
$ambid = $row['Ambulance_id'];
$schrge = $row['Service_charge'];
$sarea = $row['Service_area'];

$sql = " INSERT INTO `get_ambulance`(`C_Name`, `C_Address`, `C_ContactNo`, `C_Email`, `ambulance_id`, `Service_Charge`, `Service_Area`) VALUES(?, ?, ?, ?, ?, ?, ?) ";
$stmnt = $MySQLi_connection->prepare($sql);

$stmnt->bind_param("ssissss",$cname, $caddress, $ccontact, $cemail, $ambid, $schrge, $sarea);
$stmnt->execute();
?>
<script type="text/javascript">
            alert("You will received ambulance service within 30 minutes.");
            window.location = "get_ambulance.php";
        </script>
        <?php
$stmnt->close();
  $MySQLi_connection->close();
}

?>

