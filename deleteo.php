<?php 
$oid = $_GET['oid'];
$con = new mysqli('localhost','root','','gross');
$query = "UPDATE  other SET deleted =0 WHERE o_id = '$oid'";

if ($con->query($query)) {
	header('location:other.php');
} else {
	echo mysqli_error($con);
}


 ?>