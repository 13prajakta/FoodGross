<?php 
	$fruitc=$_GET['fc'];
	$con= new mysqli('localhost','root','','gross');
    $query ="SELECT  * FROM fruit WHERE f_id='$fruitc'";
    $result=$con->query($query);
    $data=$result->fetch_object();

    $number= rand(10,100);
    $name=$data->f_name;
    $cost=$data->f_cost;
    $image=$data->f_img;
    $path=$data->f_imgpath;
    $cart= 'Added';
 /*   $date=date_default_timezone_set('Asia/Kolkata'); */
    $date =  date("Y/m/d ");//h:i a

    $deleted=1;
    $query = "INSERT INTO cart VALUES (NULL, '$number','$name','$cost','$image','$path','$cart','$date','$deleted')";

    if ($con->query($query)) {
		header('location:fruit.php');
	} else {
		echo mysqli_error($con);
	}
	
 ?>