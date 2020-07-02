 <?php 
  $con = new mysqli('localhost','root','','gross');
  $query1="SELECT  * FROM other  WHERE deleted=1 ";
  $result1=$con->query($query1);
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
   <!-- Select2 -->
  <link rel="stylesheet" href="A_dashboard/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="A_dashboard/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
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
    <a href="dashboard.php" class="brand-link">
      <img src="img/capture.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">VegeShop</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="A_dashboard/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Prajakta</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item has-treeview ">
            <a href="setcategory.php" class="nav-link">
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
          <li class="nav-item has-treeview menu-open">
            <a href="addproduct.php" class="nav-link  active">
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
                <a href="other.php" class="nav-link  active">
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
            <h1 class="m-0 text-dark">Add Product</h1>
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
                <h3 class="card-title" >Add  Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <?php 
             if (isset($_GET['message'])) {
               $message=$_GET['message'];
               echo"<script>alert('$message')</script>";
             }
              ?>
               <?php 
             if (isset($_GET['message1'])) {
               $message1=$_GET['message1'];
               echo"<script>alert('$message1')</script>";
             }
              ?>
              <?php 
             if (isset($_GET['message2'])) {
               $message2=$_GET['message2'];
               echo"<script>alert('$message2')</script>";
             }
              ?> 
             
              <form role="form" method="post" action="getdataother.php" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name of Product</label>
                    <input type="text" name="oname" class="form-control" id="exampleInputEmail1" placeholder="Enter product name" required="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Product Cost</label>
                    <input type="text" name="cost" class="form-control" id="exampleInputPassword1" placeholder="Enter cost" required="">
                  </div>
                  <div class="form-group">
                    <label >Uplode Product Image</label>
                    <input type="file" name="image">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" value="submit"   style="background-color: #148F77;"  onClick="Confirm(this.form)">Submit</button>
                  <button type="close" class="btn btn-default" value="close" style="background-color: #CB4335;color: white;">Cancel</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      <?php
        $con = new mysqli('localhost','root','','gross');
        $query1="SELECT * FROM other  WHERE deleted=1";
        $result2 = $con->query($query1);

       
            echo "<div class='col-12'>";
            echo "<div class='card card-primary'>";
            echo "<div class='card-header'style='background-color: #900C3F;'>";                  
            echo "<div class='card-title' >OTHER PRODUCTS</div>"; 
            echo "</div>"; 
            echo "<div class='card-body'>";  
            echo "<div class='row'>"; 
            while ($data = $result2->fetch_object()) {
            echo "<div class='col-sm-2' style='border: 1px solid #ddd;'>";     
            echo " <a href='https://via.placeholder.com/1200/FFFFFF.png?text=1'data-toggle='lightbox' data-title='sample 1 - white' data-gallery='gallery'>";
             echo " <img src='uplode/$data->o_img'  width='200' height='170' class='img-fluid mb-2'>";        
            echo "<h3>$data->o_name</h3>";
            echo "<p>Plant Cost: $ $data->o_cost</p>";
            echo "<a href='edito.php?oid=$data->o_id' type='submit' class='btn btn-primary' value='submit' style='background-color: #148F77;float: left;padding: 6px 12;'>Edit</a>";
            echo "<a href='deleteo.php?oid=$data->o_id' type='close' class='btn btn-default' value='close' style='background-color: #CB4335;color: white;float: right;padding: 6px;'>Delete</a>";
              echo "</a>";      
              echo "</div>";
            }   
              echo "</div>";   
              echo "</div>";   
              echo "</div>";   
              echo "</div>"; 
        ?>
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
<!-- Select2 -->
<script src="A_dashboard/plugins/select2/js/select2.full.min.js"></script>
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
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>

</body>
</html>
