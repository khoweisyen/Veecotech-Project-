<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Invoice System</title>

 
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
          <a href="../../index2.php" class="nav-link">Home</a>
      </li>
     
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-comments-o"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-bell-o"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index2.php" class="brand-link"> 
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">User</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                  <a href="../../index2.php" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Main Dashboard</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          
          <li class="nav-item">
              <a href="../Quotation/quotation.php" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-info"></i>
              <p>Quotation</p>
            </a>
          </li>
          
          
          <li class="nav-item">
              <a href="../Invoice/invoice.php" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-info"></i>
              <p>Invoice</p>
            </a>
          </li>
            
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Maintenance
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="../Customer portal Management/CustomerDetails.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Customer</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="../Customer portal Management/ProductMaintenance.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Product</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-info"></i>
              <p>
                Setting
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="../Customer portal Management/CustomerCompanyUpdate.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Company details</p>
                </a>
              </li>
             
            </ul>
          </li>
             
         
            <!--Logut Nav-->
          <li class="nav-item">
              <a href="../examples/login.php" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-info"></i>
              <p>Logout</p>
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
            <h1 class="m-0 text-dark">Setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   <div class="container">
  <h2>Company Profile</h2>
  <form class="form-horizontal" action="../../Pages/Customer portal Management/CustomerCompanyUpdate.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="companyName">Company Name:</label>
      <div class="col-sm-10">
        <input type="companyName" class="form-control" id="Company-Name" placeholder="Enter companyName" name="companyName">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Add">Addres:</label>
      <div class="col-sm-10">          
        <input type="address" class="form-control" id="Address" placeholder="Enter Address" name="Add">
      </div>
    </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="city">City:</label>
      <div class="col-sm-10">          
        <input type="city" class="form-control" id="pwd" placeholder="Enter city" name="city">
      </div>
    </div>
      
     <div class="form-group">
       <label for="country">Country:</label>
      <select class="form-control" id="Country">
         <option>Malaysia</option>
         <option>United Kingdom</option>
         <option>United State</option>
         <option>Singapore</option>
      </select>
     </div>
       
      <div class="form-group">
       <label for="state">Province/State:</label>
      <select class="form-control" id="State">
         <option>Penang</option>
         <option>Melaka</option>
         <option>Kuala Lumpur</option>
         <option>Johor Bahru</option>
      </select>
     </div>
      
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="zip">Postal/Zip Code:</label>
      <div class="col-sm-10">          
        <input type="postal" class="form-control" id="zip" placeholder="Enter zip" name="zip">
      </div>
    </div>
      
      
      <div class="form-group">
       <label for="zone">Time Zone:</label>
      <select class="form-control" id="zone">
         <option>Asia/Kuala_Lumpur</option>
         <option>1</option>
         <option>2</option>
         <option>3</option>
      </select>
     </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="phNB">Phone:</label>
      <div class="col-sm-10">          
        <input type="phone" class="form-control" id="phNB" placeholder="Enter Phone Number" name="phNB">
      </div>
    </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="Fax">Fax:</label>
      <div class="col-sm-10">          
        <input type="fax" class="form-control" id="Fax" placeholder="Enter FAX" name="Fax">
      </div>
    </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="mobNB">Mobile:</label>
      <div class="col-sm-10">          
        <input type="mobile" class="form-control" id="mobNB" placeholder="Enter Mobile Number" name="mobNB">
      </div>
    </div>
      
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="Toll">Toll Free:</label>
      <div class="col-sm-10">          
        <input type="toll" class="form-control" id="Toll" placeholder="Enter Toll Free" name="Toll">
      </div>
    </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="web">Website:</label>
      <div class="col-sm-10">          
        <input type="website" class="form-control" id="web" placeholder="Enter Website" name="web">
      </div>
    </div>
      
      
         <div class="form-group">
         <label for="file">Select a logo to upload</label>
          <div class="col-sm-10">
             <input type="file" name="file">
                 <p class="help-block">Only jpg,jpeg,png and gif file with maximum size of 1 MB is allowed.</p>
          </div>
         </div>
                 
    </div> <!-- /container -->
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="save" class="btn btn-primary">Save</button>
      </div>
    </div>
  </form>
</div>
    
    
    
  
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

 <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
   
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018-2018 <a href="https://www.veecotech.com.my/"> VeecoTech Web & Ecommerce Sdn. Bhd.</a>.</strong>
    All rights reserved. • Website powered by VeecoTech CMS We are the client-focused website design and online advertising company based in Prai, Penang, Ipoh, Malaysia.
  </footer>
</div>

</body>

<?php
        //turn on php error reporting
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
             
            $name     = $_FILES['file']['name'];
            $tmpName  = $_FILES['file']['tmp_name'];
            $error    = $_FILES['file']['error'];
            $size     = $_FILES['file']['size'];
            $ext      = strtolower(pathinfo($name, PATHINFO_EXTENSION));
           
            switch ($error) {
                case UPLOAD_ERR_OK:
                    $valid = true;
                    //validate file extensions
                    if ( !in_array($ext, array('jpg','jpeg','png','gif')) ) {
                        $valid = false;
                        $response = 'Invalid file extension.';
                    }
                    //validate file size
                    if ( $size/1024/1024 > 2 ) {
                        $valid = false;
                        $response = 'File size is exceeding maximum allowed size.';
                    }
                    //upload file
                    if ($valid) {
                        $targetPath =  dirname( __FILE__ ) . DIRECTORY_SEPARATOR. 'uploads' . DIRECTORY_SEPARATOR. $name;
                        move_uploaded_file($tmpName,$targetPath);
                        header( 'Location: index.php' ) ;
                        exit;
                    }
                    break;
                case UPLOAD_ERR_INI_SIZE:
                    $response = 'The uploaded file exceeds the upload_max_filesize directive in php.ini.';
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    $response = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.';
                    break;
                case UPLOAD_ERR_PARTIAL:
                    $response = 'The uploaded file was only partially uploaded.';
                    break;
                case UPLOAD_ERR_NO_FILE:
                    $response = 'No file was uploaded.';
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    $response = 'Missing a temporary folder. Introduced in PHP 4.3.10 and PHP 5.0.3.';
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    $response = 'Failed to write file to disk. Introduced in PHP 5.1.0.';
                    break;
                case UPLOAD_ERR_EXTENSION:
                    $response = 'File upload stopped by extension. Introduced in PHP 5.2.0.';
                    break;
                default:
                    $response = 'Unknown error';
                break;
            }
 
            echo $response;
        }
 ?>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../../dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- SparkLine -->
<script src="../../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jVectorMap -->
<script src="../../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.2 -->
<script src="../../plugins/chartjs-old/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="../../dist/js/pages/dashboard2.js"></script>
</body>
</html>
