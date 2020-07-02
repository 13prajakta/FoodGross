<?php 
	$vegc=$_GET['vc'];
	$con= new mysqli('localhost','root','','gross');
    $query ="SELECT  * FROM veg WHERE v_id='$vegc'";
    $result=$con->query($query);
    $data=$result->fetch_object();

    $number= rand(10,100);
    $name=$data->v_name;
    $cost=$data->v_cost;
    $image=$data->v_img;
    $path=$data->v_imgpath;
    $cart= 'Added';
 /*   $date=date_default_timezone_set('Asia/Kolkata'); */
    $date =  date("Y/m/d ");//h:i a

    $deleted=1;
    $query = "INSERT INTO cart VALUES (NULL, '$number','$name','$cost','$image','$path','$cart','$date','$deleted')";

    if ($con->query($query)) {
		header('location:veg.php');
	} else {
		echo mysqli_error($con);
	}
	
 ?>