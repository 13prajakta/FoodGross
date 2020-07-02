<?php 
  $did = $_GET['uid'];

  $con = new mysqli('localhost','root','','gross');
  $query = "SELECT * FROM user WHERE u_id = '$did'";

  $result = $con->query($query);

  $data = $result->fetch_object();

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Register</title>
     <link rel="stylesheet" href="A_dashboard/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="A_dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="A_dashboard/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashregi.css" rel="stylesheet">
  </head>
  <body>
     <div class="background" style="background-image: url(../images/backregi.jpg);background-repeat: no-repeat;background-position: center;height: 100vh;" >
        <div class="container">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4  ">
              <div class="register-logo">
                <h1 class="text-center" style="color: black;">CACTI.CO</h1>
              </div>
              <div class="form1">
                <form method="post" action="update.php">
                	 <input type="hidden" name="uid" value="<?php echo $data->u_id ?>">
                     <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Name" name="dname" value="<?php echo $data->u_name ?>">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" name="dcontact" placeholder="Contact Number" min="0" maxlength="10" value="<?php echo $data->u_num ?>">
                      </div>
                      <div class="form-group">
                        <input type="email" name="demail" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Email" value="<?php echo $data->u_email	 ?>">
                      </div>
                      <div class="form-group">
                        <input type="password" name="dpassword" class="form-control" id="exampleInputPassword1" placeholder=" Creat Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" value="<?php echo $data->u_pass ?>">
                      </div>
                      <div class="form-group">
                      <label for="exampleInputEmail1"style="color: #000;">Gender</label>
                        <div class="radio">
                      <label>
                      <input type="radio" name="Radio" id="blankRadio1" value="Male" aria-label="..." required value="<?php echo $data->u_gender ?>">Male
                      </label>
                     <label>
                      <input type="radio" name="Radio" id="blankRadio1" value="Female" aria-label="..."required value="<?php echo $data->u_gender ?>">Female
                     </label>
                     <label>
                        <input type="radio" name="Radio" id="blankRadio1" value="other" aria-label="..."required value="<?php echo $data->u_gender ?>">Other
                      </label>
                    </div>
                      <input type=submit value='SUBMIT' class="btn btn-default sub">
                      <a href="dashlogin.php" style="float: left;">already have an account?</a>
                </form> 
              </div>
            </div> 
            <div class="col-md-4"></div>   
          </div>
        </div>
      </div>
     
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="A_dashboard/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="A_dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="A_dashboard/dist/js/adminlte.min.js"></script>
  </body>
</html>  