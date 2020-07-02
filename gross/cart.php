<?php 
  $con = new mysqli('localhost','root','','gross');
  $query = "SELECT * FROM cart WHERE deleted=1";
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">Blog</a></li>
                    <li><a href="index.php">Product V</a></li>
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
    </div><!-- container fluid -->
   

   <!-- cart section -->
   <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="table-wrap" style="overflow-x:auto;">
            <table class="table">
              <thead class="thead-primary">
                <tr>
                  <th>&nbsp;</th>
                  <th>Product No</th>
                  <th>&nbsp;</th>
                  <th>Product</th>
                  <th>Date</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>total</th>
                  <th>&nbsp;</th>
                </tr>
              </thead>
              <?php 
              
              while ($data=$result->fetch_object()) {
                
              echo"<tbody>";
                echo "<tr class='alert' role='alert'>";
                  echo "<td>";
                    echo "<label class='checkbox-wrap checkbox-primary'>
                      <input type='checkbox'checked>
                      <span class='checkmark'></span>
                    </label>";
                  echo "</td>";
                  echo "<td>";
                  echo "<div><span># $data->number</span></div>";
                  echo "</td>";
                  echo "<td>";
                    echo "<div class='img' style='background-image: url(../$data->c_imgpath);'></div>";
                  echo "</td>";
                  echo "<td>";
                    echo "<div class='email'>
                      <span>$data->c_name</span>
                    </div>";
                  echo "</td>";
                   echo "<td>";
                    echo "<div>
                      <span>$data->date</span>
                    </div>";
                  echo "</td>";
                  echo"<td>$ $data->c_cost</td>";
                  echo"<td class='quantity shoping_cart_quantity'>";
                    echo"<div class='input-group quantity1'>";
                    echo"<div class='pro-qty'>";
                      echo"<input type='text' name='quantity' class='quantity form-control input-number' value='2' min='1' max='100'>";
                    echo"</div>";
                    echo"</div>";
                  echo "</td>";
                  echo"<td>$89.98</td>";
                  echo"<td>";
                  echo"<a href='cartdelete.php?dcid=$data->c_id'><i class='fa fa-close'></i></a>";
                  echo "</td>";
                  echo "</tr>";
              echo"</tbody>";
            }
               ?>
            </table>
          </div>
        </div>
        <p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
      </div>
    </section>

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
    <!-- cart quantity -->
  <script>
    var proQty = $('.pro-qty');
    proQty.prepend('<span class="dec qtybtn">-</span>');
    proQty.append('<span class="inc qtybtn" style="background-color: #F5F5F5;">+</span>');
    proQty.on('click', '.qtybtn', function () {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find('input').val(newVal);
    });

  </script>
  </body>
</html>  