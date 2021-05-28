
<?php include_once 'connection.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/Receptionist.css">
    <title>Receptionist</title>
    </head>
<body>
    <div class="container1 dark1">
        <div class="wrapper1">
    <ul>
        <li><a href="#">Profile</a></li>
        <?php
        $sql_get=mysqli_query($con,"SELECT * FROM message where status=0");
        $count=mysqli_num_rows($sql_get);
        ?>

        <li><a href="#"><div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    Notifications
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <?php 
        $sql_get1=mysqli_query($con,"SELECT * FROM message WHERE status=0");
        if(mysqli_num_rows($sql_get1)>0){

            while($result=mysqli_fetch_assoc($sql_get1)){
                    echo '<a class="dropdown-item text-danger font-weight-bold" href="send_msg.php?id='.$result['id'].'">'.$result['message'].'</a>';
            }
        }
            else{
                echo '<a class="dropdown-item text-danger font-weight-bold" href="#">Sorry No message</a>';
            }

    ?>
  </ul>
<span class="badge bg-secondary" id="count"></span><?php
        echo $count;

       ?> 
            </div>
        </a>


    </li>
        <li><a href="#">Appointments</a></li>
        <li><a href="#">Hospital Status</a></li>
        
        </ul>
</div>
</div>

    
</div>
<div id="clear1">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


</body>



</html>