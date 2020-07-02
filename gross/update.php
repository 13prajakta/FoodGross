<?php
    $tid = $_POST['uid'];
	$t_name = $_POST['dname'];
	$t_contact = $_POST['dcontact'];
	$t_email = $_POST['demail'];
	$d_password = $_POST['dpassword'];
	$t_radio = $_POST['Radio'];
	

	$con = new mysqli('localhost','root','','gross');

   $query = "UPDATE user SET u_name ='$t_name',u_num ='$t_contact',u_email ='$t_email',u_pass ='$d_password',u_gender ='$t_radio' WHERE u_id = '$tid' ";

	
		if ($con->query($query)) {
		header('location:view.php');
	} else {
		echo mysql_error($con);
	}
	
	
?>