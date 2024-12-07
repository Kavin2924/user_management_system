<!DOCTYPE html>
<html lang="en">
  <head>
    <title>User Login</title>

    <?php echo link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
    <?php echo link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
    <?php echo link_tag('assests/css/sb-admin.css'); ?>

  </head>

  <body class="bg-dark" id="login">
    <!--Start Login Create-->
    <nav class="navbar navbar-expand navbar-dark bg-secondary static-top"><!--start nav-->
      <a class="mt-3 " href="<?php echo site_url('user/Signup'); ?>">Register an Account</a>
      <a class="mt-3 ">User Login</a>
      <a class="mt-3 " href="<?php echo site_url('Home'); ?>">Back to Home page</a>
    </nav><!--end nav-->
    <!--<div class="wrapper">start wrapper-->
      <!--<div class="content-wrapper">start content-wrapper-->
        <!--<div class="card-header"> strat card-header-->
          <!--<a class="mt-3 " href="<?php echo site_url('user/Signup'); ?>">Register an Account</a>
          <a class="mt-3 ">User Login</a>
          <a class="mt-3 " href="<?php echo site_url('Home'); ?>">Back to Home page</a>-->
        <!--</div> end card-header-->
      <!--</div>end content-wrapper-->
    <!--</div>end wrapper-->

    <div id="wrapper"><!--start wrapper-->
      <div id="content-wrapper"><!--start content-wrapper-->
        <div class="container-fluid"><!--start container-fluid-->
          <div class="card card-login mx-auto mt-5"><!--start card card-login-->
            <div class="card-header text-center">Login</div><!--card-header-->
              <!---- Error Message ---->
              <?php if ($this->session->flashdata('error')) { ?>
                <p style="color:red; font-size:18px;" align="center"><?php echo $this->session->flashdata('error');?></p>
              <?php } ?>

              <div class="card-body"><!--start card-body-->
                <?php echo form_open('user/login');?>

                <div class="form-group"><!--start form-group-->
                  <div class="form-label-group"><!--start form-label-group-->
                    <?php echo form_input(['name'=>'emailid','id'=>'emailid','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('emailid')]);?>
                    <?php echo form_label('Enter valid email id', 'emailid'); ?>
                    <?php echo form_error('emailid',"<div style='color:red'>","</div>");?>
                  </div><!--end form-label-group-->
                </div><!--end form-group-->

                <div class="form-group"><!--start form-group-->
                  <div class="form-label-group"><!--start form-label-group-->
                    <?php echo form_password(['name'=>'password','id'=>'password','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('password')]);?>
                    <?php echo form_label('Password', 'password'); ?>
                    <?php echo form_error('password',"<div style='color:red'>","</div>");?>
                  </div><!--end form-label-group-->
                </div><!--end form-group-->

                <?php echo form_submit(['name'=>'login','value'=>'Login','class'=>'btn btn-primary btn-block']); ?>
                <?php echo form_close(); ?>

                <!--<div class="text-center">start text-center-->
                  <!--<a class="d-block small mt-3" href="<?php// echo site_url('user/Signup'); ?>">Register an Account</a>-->
                  <!--<a class="d-block small" href="<?php //echo site_url('Home'); ?>">Back to Home page</a>-->
                <!--</div>end text-center-->

              </div><!--end card-body-->
          </div><!--end card card-login-->
        </div><!--end container-fluid-->
      </div><!--end content-wrapper-->
    </div><!--end wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <!--End Login Create-->
  </body>

</html>
