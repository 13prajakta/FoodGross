<?php 

	/*echo "<pre>";
	print_r($_POST);
	print_r($_FILES);
	exit;*/

	$name = $_POST['catname'];
	$deleted=1;
	$con = new mysqli('localhost','root','','gross');

	$query = "INSERT INTO maincat VALUES (NULL, '$name','$deleted')";

	if ($con->query($query)) {
		header('location: maincategory.php?message=category submitted successfuly');
	} else {
		echo mysqli_error($con);
	}
 ?>