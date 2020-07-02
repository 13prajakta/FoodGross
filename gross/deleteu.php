<?php 
$dbid = $_GET['uid'];
$con = new mysqli('localhost','root','','gross');
$query = "DELETE  FROM user WHERE u_id = '$dbid'";
if ($con->query($query)) {
	header('location:view.php');
} else {
	echo mysqli_error($con);
}


 ?>