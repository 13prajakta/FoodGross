<?php 
	$otherc=$_GET['oc'];
	$con= new mysqli('localhost','root','','gross');
    $query ="SELECT  * FROM other WHERE o_id='$otherc'";
    $result=$con->query($query);
    $data=$result->fetch_object();

    $number= rand(10,100);
    $name=$data->o_name;
    $cost=$data->o_cost;
    $image=$data->o_img;
    $path=$data->o_imgpath;
    $cart= 'Added';
 /*   $date=date_default_timezone_set('Asia/Kolkata'); */
    $date =  date("Y/m/d ");//h:i a

    $deleted=1;
    $query = "INSERT INTO cart VALUES (NULL, '$number','$name','$cost','$image','$path','$cart','$date','$deleted')";

    if ($con->query($query)) {
		header('location:other.php');
	} else {
		echo mysqli_error($con);
	}
	
 ?>