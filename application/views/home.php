<!DOCTYPE html>
<html lang="en">

<head>
 <title>Home Page</title>
<!-- Bootstrap core CSS-->
<?php echo link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
<!-- Custom fonts for this template-->
<?php echo link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
<!-- Page level plugin CSS-->
<?php echo link_tag('assests/vendor/datatables/dataTables.bootstrap4.css'); ?>
<!-- Custom styles for this template-->
<?php echo link_tag('assests/css/sb-admin.css'); ?>

  </head>

  <body id="page-top">
    <div id="wrapper"><!--start wrapper-->
      <div id="content-wrapper"><!--start content-wrapper-->
        <div class="container-fluid"><!--start container-fluid-->
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a>Home Page</a>
            </li>     
          </ol>
          <!-- Page Content -->
          <h1>User Management System in CodeIgniter</h1>
          <hr>
            <div class="row"><!--start row-->
              <div class="col-xl-3 col-sm-6 mb-3"><!--start col-xl-3 col-sm-6 mb-3-->
                <div class="card text-white bg-warning o-hidden h-100"><!--start text-white-->
                  <div class="card-body"><!--start card-body-->
                    <div class="card-body-icon"><!--start card-body-icon-->
                      <i class="fas fa-fw fa-list"></i>
                    </div><!--end card-body-icon-->
                      <div class="mr-5">Admin Login</div>
                  </div><!--end card-body-->
                    <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/login'); ?>"><!--start a tag-->
                      <span class="float-left">Click Here</span>
                        <span class="float-right"><!--start span-->
                          <i class="fas fa-angle-right"></i>
                        </span><!--end span-->
                    </a><!--end a tag-->
                </div><!--end text-white-->
              </div><!--end col-xl-3 col-sm-6 mb-3-->

              <div class="col-xl-3 col-sm-6 mb-3"><!--start col-xl-3 col-sm-6 mb-3-->
                <div class="card text-white bg-primary o-hidden h-100"><!--start text-white-->
                  <div class="card-body"><!--start card-body-->
                    <div class="card-body-icon"><!--start card-body-icon-->
                      <i class="fas fa-fw fa-users"></i>
                    </div><!--end card-body-icon-->
                    <div class="mr-5">User Login</div>
                  </div><!--end card-body-->
                    <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('user/login'); ?>"><!--strat a tag-->
                      <span class="float-left">Click Here</span>
                        <span class="float-right"><!--start span-->
                          <i class="fas fa-angle-right"></i>
                        </span><!--end span-->
                    </a><!--end a tag-->
                </div><!--end text-white-->
              </div><!--end col-xl-3 col-sm-6 mb-3-->

              <div class="col-xl-3 col-sm-6 mb-3"><!--start col-xl-3 col-sm-6 mb-3-->
                <div class="card text-white bg-warning o-hidden h-100"><!--start text-white-->
                  <div class="card-body"><!--start card-body-->
                    <div class="card-body-icon"><!--start card-body-icon-->
                      <i class="fas fa-fw fa-list"></i>
                    </div><!--end card-body-icon-->
                    <div class="mr-5">User Registration</div>
                  </div><!--end card-body-->
                    <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('user/signup'); ?>"><!--start a tag-->
                      <span class="float-left">Click Here</span>
                        <span class="float-right"><!--start span-->
                        <i class="fas fa-angle-right"></i>
                        </span><!--end span-->
                  </a><!--end a tag-->
                </div><!--end text-white-->
              </div><!--end col-xl-3 col-sm-6 mb-3-->
            </div><!--end row-->
          </div><!--end container-fluid-->
      </div><!--end content-wrapper-->
    </div><!--end wrapper-->

    <script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('assests/vendor/chart.js/Chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/datatables/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assests/js/sb-admin.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/js/demo/datatables-demo.js'); ?>"></script>
    <script src="<?php echo base_url('assests/js/demo/chart-area-demo.js'); ?>"></script>

  </body>

</html>
