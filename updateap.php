<?php
	$con = new mysqli('localhost','root','','gross');
    $aid = $_POST['aid'];
	$plname = $_POST['plantname'];
	$plcost = $_POST['cost'];
	

	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_tmp_name = $_FILES['image']['tmp_name'];

	$destination="uplode/". $image_name ;


   



	if (!empty($image_name)) {
		
   $query = "UPDATE allpro SET a_name ='$plname',a_cost ='$plcost',a_img ='$image_name',a_imgpath='$destination' WHERE a_id = '$aid' ";

   if (move_uploaded_file($image_tmp_name, $destination)) {
		if ($con->query($query)) {
		header('location:all.php?message2=data updated successfuly');
	} 
	} else {
		echo "image hasn't uploaded";
	}   
	}
	else{

   $query = "UPDATE allpro SET a_name ='$plname',a_cost ='$plcost' WHERE a_id = '$aid' ";

		if ($con->query($query)) {
		header('location:all.php?message2=data updated successfuly');
	} 
	else {
		echo "image hasn't uploaded";
	}   
	}   
?>