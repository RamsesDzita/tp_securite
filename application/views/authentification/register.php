<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url();?>images/logo.png">

    <title>Security Service - Registration </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

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
<body class="hold-transition register-page">
<div class="register-box">

  <div class="register-box-body">
	  <div class="login-logo">
      <a href="<?php echo base_url();?>authentification"><img src="<?php echo base_url();?>images/logo.png"><br>
      Security</b>Service</a>
    </div>
    <p class="login-box-msg">Register a new membership</p>

    <?php echo validation_errors('<div class="alert alert-danger alert-dismissable fade in">
    <a href="" class="close" data-dismiss="alert" aria-label="close">×</a>','</div>');?>
    
    <form action="" method="post" class="form-element">
      <div class="form-group has-feedback">
        <input type="text" name="username" value="<?php echo set_value('username'); ?>" class="form-control" placeholder="Login">
        <span class="ion ion-person form-control-feedback "></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" placeholder="Password">
        <span class="ion ion-locked form-control-feedback "></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="confirmPass" value="<?php echo set_value('confirmPass'); ?>" class="form-control" placeholder="Retype password">
        <span class="ion ion-log-in form-control-feedback "></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="accountNumber" value="<?php echo set_value('accountNumber'); ?>" class="form-control" placeholder="Account number">
        <span class="ion ion-log-in form-control-feedback "></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="bank" value="<?php echo set_value('bank'); ?>" class="form-control" placeholder="Bank">
        <span class="ion ion-log-in form-control-feedback "></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="country" value="<?php echo set_value('country'); ?>" class="form-control" placeholder="Country">
        <span class="ion ion-log-in form-control-feedback "></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="amount" value="<?php echo set_value('amount'); ?>" class="form-control" placeholder="Amount">
        <span class="ion ion-log-in form-control-feedback "></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-info btn-block margin-top-10">SIGN UP</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
	  
     <div class="margin-top-20 text-center">
    	<p>Already have an account?<a href="<?php echo base_url();?>authentification" class="text-info m-l-5"> Sign In</a></p>
     </div>
    
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->


	<!-- jQuery 3 -->
	<script src="<?php echo base_url();?>assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- popper -->
	<script src="<?php echo base_url();?>assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="<?php echo base_url();?>assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	
</body>
</html>
