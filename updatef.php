<?php
	$con = new mysqli('localhost','root','','gross');
    $fid = $_POST['fid'];
	$flname = $_POST['fruitname'];
	$plcost = $_POST['cost'];
	

	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_tmp_name = $_FILES['image']['tmp_name'];

	$destination="uplode/". $image_name ;

	if (!empty($image_name)) {
		
   $query = "UPDATE fruit SET f_name ='$flname',f_cost ='$plcost',f_img ='$image_name',f_imgpath='$destination' WHERE f_id = '$fid' ";

   if (move_uploaded_file($image_tmp_name, $destination)) {
		if ($con->query($query)) {
		header('location:fruit.php?message2=data updated successfuly');
	} 
	} else {
		echo "image hasn't uploaded";
	}   
	}
	else{

   $query = "UPDATE fruit SET f_name ='$plname',f_cost ='$plcost' WHERE f_id = '$fid' ";

		if ($con->query($query)) {
		header('location:fruit.php?message2=data updated successfuly');
	} 
	else {
		echo "image hasn't uploaded";
	}   
	}   
?>