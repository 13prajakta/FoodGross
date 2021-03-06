<?php 

  $fid = $_GET['fid'];
  $con = new mysqli('localhost','root','','gross');
  $query1="SELECT  * FROM fruit  WHERE f_id = '$fid'";
  $result1=$con->query($query1);
  $data = $result1->fetch_object();
  ?>

 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="A_dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="A_dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="A_dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="A_dashboard/plugins/jqvmap/jqvmap.min.css">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="A_dashboard/plugins/ekko-lightbox/ekko-lightbox.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="A_dashboard/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="A_dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="A_dashboard/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="A_dashboard/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="logout.php"  style="color: white;"><button class="btn btn-danger " type="button">Logout</a>
      </button></li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="A_dashboard/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="A_dashboard/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item has-treeview menu-open">
            <a href="setcategory.php" class="nav-link active">
              <i class="nav-icon fas fa-cog"></i>
                <p>
               Set Category 
                <i class="fas fa-angle-left right"></i>
              </p>        
            </a>
             <ul class="nav nav-treeview menu-open">
              <li class="nav-item">
                <a href="maincategory.php" class="nav-link">
                  <i class="far fa-circle text-warning nav-icon"></i>
                  <p>Main Category</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="addproduct.php" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Add Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="all.php" class="nav-link">
                  <i class="far fa-circle text-info nav-icon"></i>
                  <p>All Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="fruit.php" class="nav-link">
                  <i class="far fa-circle text-info nav-icon"></i>
                  <p>Fruits</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="veg.php" class="nav-link">
                  <i class="far fa-circle text-info nav-icon"></i>
                  <p>Vegitable</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="other.php" class="nav-link">
                  <i class="far fa-circle text-info nav-icon"></i>
                  <p>Other</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item has-treeview ">
            <a href="view.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
                Users List       
            </a>
          </li>
           <li class="nav-item has-treeview ">
            <a href="view.php" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
                Users Feedback        
            </a>
          </li>
           <li class="nav-item has-treeview ">
            <a href="view.php" class="nav-link">
              <i class="nav-icon fas fa-comment-alt"></i>
                Users Enquiry        
            </a>
          </li>
           <li class="nav-item has-treeview ">
            <a href="view.php" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
                Purchased List        
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">product</a></li>
              <li class="breadcrumb-item active">product v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header" style="background-color: #F1C40F;">
                <h3 class="card-title" >Add Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="updatef.php" enctype="multipart/form-data">
                <input type="hidden" name="fid" value="<?php echo $data->f_id ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name of fruit</label>
                    <input type="text" name="fruitname" class="form-control" id="exampleInputEmail1" placeholder="Enter plant name" required="" value="<?php echo $data->f_name ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Product Cost</label>
                    <input type="text" name="cost" class="form-control" id="exampleInputPassword1" placeholder="Enter cost" required="" value="<?php echo $data->f_cost?>">
                  </div>
                  <div class="form-group">
                    <label >Uplode Product Image</label>
                    <div class="input-group">
                        <input type="file" name="image" ><img src="<?php echo $data->f_imgpath ?>" selected="selected" width="100" height="100">                 
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" value="submit" style="background-color: #148F77;">Update</button>
                  <button type="close" class="btn btn-default" value="close" style="background-color: #CB4335;color: white;">Cancel</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>  
    </section>
        <!-- /.row -->
       </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="A_dashboard/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="A_dashboard/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="A_dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="A_dashboard/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="A_dashboard/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="A_dashboard/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="A_dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="A_dashboard/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="A_dashboard/plugins/moment/moment.min.js"></script>
<script src="A_dashboard/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="A_dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="A_dashboard/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="A_dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="A_dashboard/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="A_dashboard/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="A_dashboard/dist/js/demo.js"></script>
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Ekko Lightbox -->
<script src="../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- Filterizr-->
<script src="../plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>
</body>
</html>
