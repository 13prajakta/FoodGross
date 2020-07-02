<?php
	$con = new mysqli('localhost','root','','gross');
    $oid = $_POST['oid'];
	$olname = $_POST['oname'];
	$olcost = $_POST['cost'];
	

	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_tmp_name = $_FILES['image']['tmp_name'];

	$destination="uplode/". $image_name ;

	if (!empty($image_name)) {
		
   $query = "UPDATE other SET o_name ='$olname',o_cost ='$olcost',o_img ='$image_name',o_imgpath='$destination' WHERE o_id = '$oid' ";

   if (move_uploaded_file($image_tmp_name, $destination)) {
		if ($con->query($query)) {
		header('location:other.php?message2=data updated successfuly');
	} 
	} else {
		echo "image hasn't uploaded";
	}   
	}
	else{

   $query = "UPDATE other SET o_name ='$olname',o_cost ='$olcost' WHERE o_id = '$oid' ";

		if ($con->query($query)) {
		header('location:other.php?message2=data updated successfuly');
	} 
	else {
		echo "image hasn't uploaded";
	}   
	}   
?>