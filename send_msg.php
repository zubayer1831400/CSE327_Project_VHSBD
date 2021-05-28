<?php
include_once 'connection.php';
?>
<?php 
if(isset($_GET['id'])){

	$main_id=$_GET['id'];
	$sql_update= mysqli_query($con,"UPDATE message SET status=1 WHERE id='main_id'");
}




?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/surgery.css">
    <title></title>
  </head>
  <body>
    <div class="table_surgery">       
<table>
   
<tr>
<th >S.No.</th>
<th >Name</th>
<th >Message</th>
<th >Date</th>


</tr>

<?php
$sr_no=1;
 $sql_get=mysqli_query($con,"SELECT * FROM message WHERE status=1");
while($main_result= mysqli_fetch_assoc($sql_get))

:?>


<tr>
	<th ><?php echo $sr_no++; ?></th>
	<td><?php echo $main_result['name'];?></td>
	<td><?php echo $main_result['message'];?></td>
	<td><?php echo $main_result['cr_date'];?></td>


</tr>
<?php endwhile ?>

</table>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>








</body>



</html>