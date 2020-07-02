<?php 
  $con = new mysqli('localhost','root','','gross');
  $query = "SELECT * FROM veg WHERE deleted=1";
  $result = $con->query($query);
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VegShop</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/18721bd983.js" crossorigin="anonymous"></script>
  </head>
  <body>
     <div class="container-fluid">
      <!-- header section -->
      <div class="row header">
        <div class="col-md-12">
         
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Product V</a></li>
                  </ul>
              </div>
                
              </div>
                <a class="navbar-brand" href="#">
                  <img src="images/capture.png">
                </a>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#">Login</a></li>
                  <li><a href="#"><i class="fas fa-shopping-bag" style="color: black;padding: 0;"></i> &nbsp;Cart</a></li>
                </ul>
                  </li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
        </div>
      </div>
      <!-- slider -->
      <div class="jumb">
        <div class="jumbotron text-center">
          <div class="strip">
            <h1>Organic Store</h1><br>
            <p>Vegitarian Shop With Organic Food</p><br>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Search Our Store <i class="fas fa-long-arrow-alt-right"></i></a></p>
          </div>
        </div>
      </div>
      <!-- product section -->
      <div class="row text-center">
        <div class="col-md-12">
          <h2>New Products</h2>
        </div>
        <div></div>
      </div>
      <div class="row text-center">
        <div class="col-md-12">
          <div class="col-md-4"></div>
          <div class="col-md-5">
            <ul class="nav nav-pills">
              <li role="presentation"><a href="index.php">ALL PRODUCTS</a></li>
              <li role="presentation"><a href="fruit.php">FRUITS</a></li>
              <li role="presentation" class="active"><a href="veg.php">VEGITABLES</a></li>
              <li role="presentation"><a href="other.php">OTHERS</a></li>
            </ul>
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
    </div><!-- container fluid -->
    <?php 
    echo"<div class='container'>";
      echo"<div class='row product'>";
      while ($data= $result->fetch_object()){

       echo" <div class='col-md-3'>";
          echo"<div class='thumbnail'>";
           echo" <img src='../$data->v_imgpath' alt='...' class='image'>";
           echo" <div class='caption'>";
             echo" <h3>$data->v_name</h3>";
             echo" <p>$ $data->v_cost</p>";
             echo" <div class='overlay'>";
             echo" <div class='text'><a href=''><i class='fas fa-shopping-bag'></i></a></div>";
            echo"</div>";
           echo" </div>";
          echo"</div>";

      }
       echo" </div>";
     echo" </div>";
     ?>
      <div class="row">
        <div class="col-md-12 text-center show">
          <a href="" class="btn btn-default">Show More</a>
        </div>
      </div>
    </div><!-- container end -->
    <!-- fresh product section -->
    <div class="container-fluid">
       <div class="jumb1">
        <div class="jumbotron text-center">
        </div>
      </div>
    </div><!-- container fluid -->
    <!-- happy customer -->
    <div class="container text-center persone">
      <h2>What Our Customer Think</h2>
      <div class="row" style="margin-top: 30px;margin-bottom: 80px;">
        <div class="col-md-12">
          <div class="carousel slide multi-item-carousel" id="theCarousel">
            <div class="carousel-inner">
              <div class="item active">
                <div class="col-xs-4">
                  <p>Your Product Are Awsome</p>
                  <a href="#1"><img src="images/persone.jpg" class="img-responsive img-circle" width="50%"></a>
                <p>Thomas B.</p></div>

              </div>
              <div class="item">
                <div class="col-xs-4">
                  <p>Your Product Are Awsome</p><a href="#1"><img src="images/persone.jpg" class="img-responsive img-circle" width="50%"></a>
                <p>Thomas B.</p></div>

              </div>
              <div class="item">
                <div class="col-xs-4">
                  <p>Your Product Are Awsome</p><a href="#1"><img src="images/persone.jpg" class="img-responsive img-circle" width="50%"></a>
                <p>Thomas B.</p></div>

              </div>
              <div class="item">
                <div class="col-xs-4">
                  <p>Your Product Are Awsome</p><a href="#1"><img src="images/persone.jpg" class="img-responsive img-circle" width="50%"></a>
                <p>Thomas B.</p></div>

              </div>
              <div class="item">
                <div class="col-xs-4">
                  <p>Your Product Are Awsome</p><a href="#1"><img src="images/persone.jpg" class="img-responsive img-circle" width="50%"></a>
                <p>Thomas B.</p></div>

              </div>
              <!-- add  more items here -->
              <!-- Example item start:  -->
              
              <div class="item">
                <div class="col-xs-4">
                  <p>Your Product Are Awsome</p><a href="#1"><img src="images/persone.jpg" class="img-responsive img-circle" width="50%"></a>
                <p>Thomas B.</p></div>

              </div>
              
              <!--  Example item end -->
            </div>
            <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!-- footer -->
    <div class="container-fluid">
      <div class="row footer">
        <div class="col-md-12">
          <div class="col-md-3">
            <h4>contact</h4>
            <address>
              <strong>Twitter, Inc.</strong><br>
              1355 Market Street, Suite 900<br>
              San Francisco, CA 94103<br>
              <abbr title="Phone">P:</abbr> (123) 456-7890
            </address>
          </div>
          <div class="col-md-3">
             <h4>Shop</h4>
             <p>Product</p>
             <p>Blog</p>
             <p>Help</p>
             <p>Terms</p>
          </div>
          <div class="col-md-3">
             <h4>Shopping</h4>
             <p>Delivery Time</p>
             <p>Cost Of Delivery</p>
             <p>Payment Method</p>
             <p>Compaints And Return</p>
          </div>
          <div class="col-md-3">
             <h4>Follow Us On</h4>
             <p><a href=""><img src="images/facebook.png" class="img-responsive img-circle" width="15%" style="display: inline-block;"></a>&nbsp;<a href=""><img src="images/twitter.png" class="img-responsive img-circle" width="15%" style="display: inline-block;"></a></p>
          </div>
        </div>
      </div>
    </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      // Instantiate the Bootstrap carousel
      $('.multi-item-carousel').carousel({
        interval: false
      });

      // for every slide in carousel, copy the next slide's item in the slide.
      // Do the same for the next, next item.
      $('.multi-item-carousel .item').each(function(){
        var next = $(this).next();
        if (!next.length) {
          next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
        
        if (next.next().length>0) {
          next.next().children(':first-child').clone().appendTo($(this));
        } else {
          $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
      });
    </script>
  </body>
</html>  