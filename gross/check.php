<?php 
	$email=$_POST['demail'];
	$password=$_POST['dpassword'];
	$con= new mysqli('localhost','root','','gross');
	$query="SELECT * FROM user WHERE u_email='$email' and u_pass='$password' ";
	$result=$con->query($query);
	$rows=mysqli_num_rows($result);
	$data=$result->fetch_object();
	if ($rows==1) {
		session_start();
		$_SESSION['id']=session_id();
		$_SESSION['u_id']=$data->u_id;
		$_SESSION['name']=$data->u_name;
		$_SESSION['contact']=$data->u_num;
		$_SESSION['email']=$data->u_email;
		$_SESSION['password']=$data->u_pass;
		$_SESSION['igradio']=$data->u_gender;
		header('location: index.php?message=Login successfuly');
	} 
	else {
		echo "<h1>INVALID INPUT TYPE</h1>";
	}
	
 ?>
