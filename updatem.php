<?php
    $mainid = $_POST['mid'];
	$m_name = $_POST['catname'];
	
	$con = new mysqli('localhost','root','','gross');

   $query = "UPDATE maincat SET m_name ='$m_name' WHERE m_id = '$mainid' ";

	if ($con->query($query)) {
		header('location:maincategory.php?message1=category updated successfuly');
	} else {
		echo mysql_error($con);
	}
	
	
?>