<?php 
$vid = $_GET['vid'];
$con = new mysqli('localhost','root','','gross');
$query = "UPDATE  veg SET deleted =0 WHERE v_id = '$vid'";

if ($con->query($query)) {
	header('location:veg.php');
} else {
	echo mysqli_error($con);
}


 ?>