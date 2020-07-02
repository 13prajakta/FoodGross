<?php 
$maid = $_GET['mid'];
$con = new mysqli('localhost','root','','gross');
$query = "UPDATE maincat SET deleted=0 WHERE m_id='$maid'";
if ($con->query($query)) {
	header('location:maincategory.php');
} else {
	echo mysqli_error($con);
}


 ?>