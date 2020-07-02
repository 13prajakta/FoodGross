<?php 

	/*echo "<pre>";
	print_r($_POST);
	print_r($_FILES);
	exit;*/

	$name = $_POST['dname'];
	$contact = $_POST['dcontact'];
	$email = $_POST['demail'];
	$password = $_POST['dpassword'];
	$radio = $_POST['Radio'];

	$con = new mysqli('localhost','root','','gross');

	$query = "INSERT INTO user VALUES (NULL, '$name','$contact','$email','$password','$radio')";

	if ($con->query($query)) {
		header('location:login.php?message=Your Registration Successfull Pleas login to enjoy!');
	} else {
		echo mysqli_error($con);
	}
	
 ?>