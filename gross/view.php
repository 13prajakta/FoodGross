<?php 
 
  $con = new mysqli('localhost','root','','gross');

  $query = "SELECT * FROM user";

  $result = $con->query($query);

 ?>
 <!DOCTYPE html>
 <html>
	 <head>
	 	<title>view</title>
	 </head>
	 <body>
	 	<center>
	 		<h1>VIEW TABEL</h1>
	 		<a href="logout.php"><h1>LOGOUT</h1></a>
	 		<table border="1" cellpadding="20" cellspacing="0">
	 			<tr>
	 				<td>sr.no</td>
	 				<td>user name</td>
	 				<td>user contact</td>
	 				<td>user email</td>
	 				<td>user password</td>
	 				<td>user gender</td>
	 				<td>Action</td>
	 			</tr>
	 			<?php 
	 			while ($data = $result->fetch_object()) {
	 				echo"<tr>";
	 				echo "<td>$data->u_id</td>";
	 				echo "<td>$data->u_name</td>";
	 				echo "<td>$data->u_num</td>";
	 				echo "<td>$data->u_email</td>";
	 				echo "<td>$data->u_pass</td>";
	 				echo "<td>$data->u_gender</td>";
	 				echo "<td>";
	 					echo "<a href='editu.php?uid=$data->u_id' type='button' class='btn btn-primary'>EDIT</a>";
	 					echo "<a href='deleteu.php?uid=$data->u_id' type='button' class='btn btn-primary'>DELETE</a>";
	 				echo "</td>";
	 				echo "</tr>";
	 			}
	 			 ?>
	 		</table>
	 	</center>
	 </body>
 </html>