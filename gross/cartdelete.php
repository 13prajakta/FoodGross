<?php 
$cartid = $_GET['dcid'];
$con = new mysqli('localhost','root','','gross');
$query = "UPDATE cart SET  deleted=0  WHERE c_id = '$cartid'";

if ($con->query($query)) {
	header('location:cart.php');
} else {
	echo mysqli_error($con);
}


 ?>