<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>user login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
     <div class="background1" >
        <div class="container">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 form2">
              <h1 class="text-center"><img src="images/capture.png"></h1>
              <div class="log1">
                <form action="check.php" method="post">
                      <div class="form-group">
                        <input type="email" name="demail" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Email">
                      </div>
                      <div class="form-group">
                        <input type="password" name="dpassword" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                      </div>
                      <input type=submit value='LOGIN' class="btn btn-default sub1">
                      <input type=submit value='SIGNUP' class="btn btn-default sub1" style="background-color: #F1C40F;">
                      <a href="" style="float: left;">forgot password?</a>
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