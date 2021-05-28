<?php

// Grab User submitted information
$username = $_POST["uname"];

$password = $_POST["password"];

// Connect to the database
$MySQLi_connection= new MySQLi('localhost','root','','project_vhsbd');

if(MySQLi_connect_error())
{
    die('Connect Error('.MySQLi_connect_errno().')'.MySQLi_connect_error());
}


// Select the database to use
$username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($MySQLi_connection, $username);  
        $password = mysqli_real_escape_string($MySQLi_connection, $password);  
      
        $sql = "select Username from patient_registration where Username = '$username' and Password = '$password'";  
        $result = mysqli_query($MySQLi_connection, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){ 
        session_start(); 
            echo "<h1><center> Login successful </center></h1>";
            header("Location:patient_profile.php");
            $_SESSION["id"]=$row['Username'];  
        
            
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  