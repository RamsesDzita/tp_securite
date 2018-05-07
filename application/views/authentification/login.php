<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url();?>images/logo.png">

    <title>Security Service - Log in </title>
  <!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Bootstrap 4.0-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor_components/bootstrap/scss/mixins/_grid-framework.scss">

	<!-- Icons-->
	
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor_components/Ionicons/css/ionicons.min.css">

	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-extend.css">
	

	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/master_style.css">

	<!-- Crypto_Admin skins -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/skins/_all-skins.css">	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url();?>authentification"><img src="<?php echo base_url();?>images/logo.png"><br>
    Security</b> Service</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <?php echo validation_errors('<div class="alert alert-danger alert-dismissable fade in">
    <a href="" class="close" data-dismiss="alert" aria-label="close">×</a>','</div>');?>

        <?php if(isset($_SESSION['error'])) {?>
              <div class="alert alert-danger alert-dismissable fade in">
                <a href="" class="close" data-dismiss="alert" aria-label="close">×</a>
             <?php echo $_SESSION['error'];?>
        </div>  <?php }?>

        <?php if(isset($_SESSION['success'])) {?>
                                        <div class="alert alert-success alert-dismissable fade in">
                                        <a href="" class="close" data-dismiss="alert" aria-label="close">×</a>
                                        <?php echo $_SESSION['success']."<br> ";
                                        if(isset($_SESSION['warning'])){
                                            echo $_SESSION['warning'];
                                        }
                                        ?>
                                </div>  <?php }?>

    <form action="" method="post" class="form-element">
      <div class="form-group has-feedback">
        <input type="text" name="username" value="<?php echo set_value('username'); ?>" class="form-control" placeholder="Login">
        <span class="ion ion-person form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" placeholder="Password">
        <span class="ion ion-locked form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="checkbox">
            <input type="checkbox" id="basic_checkbox_1" name="admin" value="oui">
			      <label for="basic_checkbox_1">Are you an administrator ?</label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-6">
         <div class="fog-pwd">
          	<a href="<?php echo base_url();?>authentification/user_pass"><i class="ion ion-locked"></i> Forgot password?</a><br>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <button type="submit" class="btn btn-info btn-block margin-top-10">SIGN IN</button>
        </div>
      </div>
    </form>
    <!-- /.social-auth-links -->

    <div class="margin-top-30 text-center">
    	<p>Don't have an account? <a href="<?php echo base_url();?>authentification/register" class="text-info m-l-5">Sign Up</a></p>
    </div>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


	<!-- jQuery 3 -->
	<script src="<?php echo base_url();?>assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- popper -->
	<script src="<?php echo base_url();?>assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="<?php echo base_url();?>assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
