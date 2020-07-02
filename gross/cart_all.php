<?php 
	$allc=$_GET['ac'];
	$con= new mysqli('localhost','root','','gross');
    $query ="SELECT  * FROM allpro WHERE a_id='$allc'";
    $result=$con->query($query);
    $data=$result->fetch_object();

    $number= rand(10,100);
    $name=$data->a_name;
    $cost=$data->a_cost;
    $image=$data->a_img;
    $path=$data->a_imgpath;
    $cart= 'Added';
 /*   $date=date_default_timezone_set('Asia/Kolkata'); */
    $date =  date("Y/m/d ");//h:i a

    $deleted=1;
    $query = "INSERT INTO cart VALUES (NULL, '$number','$name','$cost','$image','$path','$cart','$date','$deleted')";

    if ($con->query($query)) {
		header('location:index.php');
	} else {
		echo mysqli_error($con);
	}
	
 ?>