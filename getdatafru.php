<?php 

	/*echo "<pre>";
	print_r($_POST);
	print_r($_FILES);
	exit;
*/
	$con = new mysqli('localhost','root','','gross');

	$fname = $_POST['fruitname'];
	$fcost = $_POST['cost'];
	$deleted=1;
	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_tmp_name = $_FILES['image']['tmp_name'];

	$destination="uplode/". $image_name ;
	$deleted=1;

	$query = "INSERT INTO fruit VALUES (NULL, '$fname','$fcost','$image_name','$destination','$deleted')";

	if (move_uploaded_file($image_tmp_name, $destination)) {
		if ($con->query($query)) {
		header('location:fruit.php?message=data submitted successfuly');
	} 
	} else {
		echo "image hasn't uploaded";
	}
 ?>