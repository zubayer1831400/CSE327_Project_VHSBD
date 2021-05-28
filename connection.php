<?php

$con=mysqli_connect('localhost','root','','notify');
if($con){
echo "connection successful";

}
else{
	echo mysqli_error($con);
}


?>