<?php
	$con = new mysqli('localhost','root','','gross');
    $vid = $_POST['vid'];
	$vlname = $_POST['vegname'];
	$vlcost = $_POST['cost'];
	

	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_tmp_name = $_FILES['image']['tmp_name'];

	$destination="uplode/". $image_name ;

	if (!empty($image_name)) {
		
   $query = "UPDATE veg SET v_name ='$vlname',v_cost ='$vlcost',v_img ='$image_name',v_imgpath='$destination' WHERE v_id = '$vid' ";

   if (move_uploaded_file($image_tmp_name, $destination)) {
		if ($con->query($query)) {
		header('location:veg.php?message2=data updated successfuly');
	} 
	} else {
		echo "image hasn't uploaded";
	}   
	}
	else{

   $query = "UPDATE veg SET v_name ='$vlname',v_cost ='$vlcost' WHERE v_id = '$vid' ";

		if ($con->query($query)) {
		header('location:veg.php?message2=data updated successfuly');
	} 
	else {
		echo "image hasn't uploaded";
	}   
	}   
?>