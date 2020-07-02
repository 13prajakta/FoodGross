<?php 
$fid = $_GET['fid'];
$con = new mysqli('localhost','root','','gross');
$query = "UPDATE  fruit SET deleted =0 WHERE f_id = '$fid'";

if ($con->query($query)) {
	header('location:fruit.php');
} else {
	echo mysqli_error($con);
}


 ?>