<?php
include_once 'connection.php';
if(isset($_POST['send'])){
$name=$_POST['username'];
$msg=$_POST['msg'];
$date=date('y-m-d h:i:s');
$sql_insert=mysqli_query($con,"INSERT INTO message(name,message,cr_date) VALUES ('$name','$msg','$date')");
if($sql_insert){

    echo "<script>alert('message send successfully');</script>";

}
else{

    echo mysqli_error($con);
    exit;
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/
    Apply.css">
    <title>MeetDoctor</title>
</head>
<body style="background-color:rgb(178, 137, 216)">
    <form method="post">

   
        <div class="apply_textarea">
            <label for="PatientName" id="label_patient_name"  placeholder="Type Your Name">Name:</label>
            <input type="text" name="username" class="textstyle"><br>

            <label for="issues" id="label_issue">Write your issues</label><br>
            
            <textarea cols="80" rows="20" id="textarea" name="msg"></textarea><br>
        <input type="submit" value="Submit" id="submit1" name="send">
        </div>

    </form>


</body>
</html>