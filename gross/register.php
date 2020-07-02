<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Register</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
     <div class="background" >
        <div class="container">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 form2">
              <h1 class="text-center"><img src="images/capture.png"></h1>
              <div class="form1">
                <form action="getdatareg.php" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Name" name="dname">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" name="dcontact" placeholder="Contact Number" min="0" maxlength="10">
                      </div>
                      <div class="form-group">
                        <input type="email" name="demail" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Email">
                      </div>
                      <div class="form-group">
                        <input type="password" name="dpassword" class="form-control" id="exampleInputPassword1" placeholder=" Creat Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                      </div>
                      <div class="form-group">
                      <label for="exampleInputEmail1"style="color: #000;">Gender</label>
                        <div class="radio">
                      <label>
                      <input type="radio" name="Radio" id="blankRadio1" value="Male" aria-label="..." required>Male
                      </label>
                     <label>
                      <input type="radio" name="Radio" id="blankRadio1" value="Female" aria-label="..."required>Female
                     </label>
                     <label>
                        <input type="radio" name="Radio" id="blankRadio1" value="Other" aria-label="..."required>Other
                      </label>
                    </div>
                      <input type=submit value='SUBMIT' class="btn btn-default sub">
                      <a href="login.php" style="float: left;">already have an account?</a>
                </form> 
              </div>
            </div> 
            <div class="col-md-4"></div>   
          </div>
        </div>
      </div>
     
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>  