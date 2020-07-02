<?php 
$aid = $_GET['aid'];
$con = new mysqli('localhost','root','','gross');
$query = "UPDATE  allpro SET deleted =0 WHERE a_id = '$aid'";

if ($con->query($query)) {
	header('location:all.php');
} else {
	echo mysqli_error($con);
}


 ?>