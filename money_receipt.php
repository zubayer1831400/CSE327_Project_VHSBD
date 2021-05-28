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

$query = "SELECT * FROM medicine_store where Medicine_Name='Napa'";
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
          
          
            <p class="Text">Medicine Name :</p>
            <input type="text" name ="mname" placeholder="" value="<?php echo $row['Medicine_Name']; ?>" disabled >
         
         

            <p class="Text">Quantity :</p>
            <input type="number" name ="qnty" placeholder="" required>
            
             <p class="Text">Total Price :</p>
            <input type="number" id="ttlprc" name ="ttlprc" placeholder="" value="<?php if (isset($_GET['qnty'])) 
           	{ $price = $row['Unit_Price']; $quan = intval($_GET['qnty']); $total = $price*$quan; echo $total;} ?>" disabled>
            </div>
           
           <p >
           	<button name="cnfrm"  onclick="window.print()"> Confirm</button>
           </p>
        
	        
         
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
$mednm = $row['Medicine_Name'];
$quan = $_POST['qnty'];
$ttlprc = $_POST['ttlprc'];

$sql = " INSERT INTO `money_receipt`(`C_Name`, `C_Address`, `C_ContactNo`, `C_Email_Address`, `Medicine_Name`, `Quantity`, `Total_Price`) VALUES(?, ?, ?, ?, ?, ?, ?) ";
$stmnt = $MySQLi_connection->prepare($sql);

$stmnt->bind_param("ssissss",$cname, $caddress, $ccontact, $cemail, $mednm, $quan, $ttlprc);
$stmnt->execute();
?>
<script type="text/javascript">
            alert("You Order has been received.");
            window.location = "money_receipt.php";
        </script>
        <?php
$stmnt->close();
  $MySQLi_connection->close();
}
  ?>
