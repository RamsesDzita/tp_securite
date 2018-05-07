<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url();?>images/logo.png">

    <title>Security Service - User profile </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
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
<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url();?>index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
	 
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
		  <img src="<?php echo base_url();?>images/logo.png" alt="logo" class="light-logo">
	  	  <img src="<?php echo base_url();?>images/logo-dark-text.png" alt="logo" class="dark-logo">
	  </span>
    </a>
  
  </header>
  
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Welcome at Security Service !
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url();?>authentification"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active">User profile</li>
      </ol>
      <div style="float: right; padding-left: 10px">
        <a href="<?php echo base_url();?>authentification/logout"><i class="fa fa-power-off"></i><span>&nbsp;Logout</span></a>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <p class="statusMsg"></p>
       <?php if(isset($_SESSION['success'])) {?>
                                        <div class="alert alert-success alert-dismissable fade in">
                                        <a href="" class="close" data-dismiss="alert" aria-label="close">×</a>
                                        <?php echo $_SESSION['success']."<br> ";
                                        if(isset($_SESSION['warning'])){
                                            echo $_SESSION['warning'];
                                        }
                                        ?>
                                </div>  <?php }?>
      <div class="row">
        <div class="col-lg-3 col-12">

          <!-- Profile Image -->
          <div class="box bg-inverse bg-dark bg-hexagons-white">
            <div class=" text-center box-body box-profile">
              <img class="profile-user-img rounded-circle img-fluid mx-auto d-block" src="<?php echo base_url();?>images/user.png" alt="User profile picture">

              <h3 class="profile-username text-center">Dear <?php echo $login; ?></h3>

              <p class="text-center">Your security is our affair !</p>
            
              <div class="row">
              	<div class="col-12">
              		<div class="profile-user-info">
        						<p> Bank </p>
        						<h6 class="margin-bottom"><?php echo $bank; ?></h6>
                    <p> Country </p>
                    <h6 class="margin-bottom"><?php echo $country; ?></h6>
      					</div>
             	</div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-9 col-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              
              <li><a class="active" href="#activity" data-toggle="tab">Welcome</a></li>
              <li><a href="#settings" onclick="getUserById()" data-toggle="tab">Update profile</a></li>
            </ul>
                        
            <div class="tab-content">
              
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <!-- /.user-block -->

                  <h3 class="margin-bottom">Security Service take care of your data !!!</h3>
                  <div class="activitytimeline">
          					  <p>
          						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
          					  </p>
          					 
                  </div>
                </div>
              </div>
              <!-- /.tab-pane -->
              
              <div class="tab-pane" id="settings">
                <form class="form-horizontal form-element col-12">
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 control-label">Login</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="login" name="login" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="password" name="password" placeholder="">
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6">
                      <div style="float: right;" class="checkbox">
                        <input type="checkbox" onchange="showPass()" id="showPassword" name="showPassword" value="oui">
                        <label for="showPassword"><i class="fa fa-eye"></i>Show password</label>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputPhone" class="col-sm-2 control-label">Account number</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="account" name="account" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputSkills" class="col-sm-2 control-label">Bank</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="bank" name="bank" placeholder="">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputSkills" class="col-sm-2 control-label">Country</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="country" name="country" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputSkills" class="col-sm-2 control-label">Amount</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="amount" name="amount" placeholder="">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <div style="float: right; padding-left: 10px" class="col-sm-10">
                      <button type="button" onclick="updateUser()" class="btn btn-success">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
   
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
      <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();?>authentification/logout"><i class="fa fa-power-off"></i> &nbsp;Logout</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();?>"><i class="fa fa-home"></i> Home</a>
      </li>
    </ul>
    </div>
    &copy; 2018 <a href="https://www.uy1.uninet.cm/">The University of Yaounde 1</a>. All Rights Reserved.
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-cog fa-spin"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Admin Birthday</h4>

                <p>Will be July 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>

                <p>New Email : jhone_doe@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>

                <p>disha@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Code Change</h4>

                <p>Execution time 15 Days</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Web Design
                <span class="label label-danger pull-right">40%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Data
                <span class="label label-success pull-right">75%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 75%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Order Process
                <span class="label label-warning pull-right">89%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 89%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Development 
                <span class="label label-primary pull-right">72%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 72%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="report_panel" class="chk-col-grey" >
			<label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>

            <p>
              general settings information
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="allow_mail" class="chk-col-grey" >
			<label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="expose_author" class="chk-col-grey" >
			<label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="show_me_online" class="chk-col-grey" >
			<label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="off_notifications" class="chk-col-grey" >
			<label for="off_notifications" class="control-sidebar-subheading ">Turn off notifications</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">              
              <a href="javascript:void(0)" class="text-red margin-r-5"><i class="fa fa-trash-o"></i></a>
              Delete chat history
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

  <script type="text/javascript">

    function getUserById(){
      $.ajax({
            type:'POST',
            url:'<?php echo base_url();?>authentification/getUserById',

            success:function(msg){

                var user = JSON.parse(msg);

                $('#login').val(user['login']);
                $('#password').val(user['password']);
                $('#account').val(user['num_compte']);
                $('#bank').val(user['banque']);
                $('#country').val(user['pays']);
                $('#amount').val(user['montant']);

            }
        });
    }

    function showPass(){
      
      if ($('#showPassword').is(":checked")){
          $('#password').attr("type","text");
      }else{
          $('#password').attr("type","password");       
      }
    }

    function updateUser(){
            var login = $('#login').val().trim();
            var password = $('#password').val().trim();
            var account = $('#account').val().trim();
            var bank = $('#bank').val().trim();
            var country = $('#country').val().trim();
            var amount = $('#amount').val().trim();
            
            $.ajax({
            type:'POST',
            url:'<?php echo base_url();?>authentification/updateUser',
            data:{login: login, password: password, account: account, bank: bank, country: country, amount: amount},
            success:function(msg){
                if(msg.toString().trim() == 'ok'){
                    $('.statusMsg').html('<div class="alert alert-success alert-dismissable fade in"><a href="" class="close" data-dismiss="alert" aria-label="close">×</a><h5>Your profile has successfully Updated.</h5></div>');
                    clearSuppressionForm();
                    setTimeout(resize, 1000);
                }else{
                    $('.statusMsg').html('<div class="alert alert-danger alert-dismissable fade in"><a href="" class="close" data-dismiss="alert" aria-label="close">×</a><h5>An error occur. Please try again.</h5></div>');
                }

            }
                
        });
    }

  </script>    
	<!-- jQuery 3 -->
	<script src="<?php echo base_url();?>assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- popper -->
	<script src="<?php echo base_url();?>assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="<?php echo base_url();?>assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- SlimScroll -->
	<script src="<?php echo base_url();?>assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- FastClick -->
	<script src="<?php echo base_url();?>assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- Crypto_Admin App -->
	<script src="<?php echo base_url();?>js/template.js"></script>
	
	<!-- Crypto_Admin for demo purposes -->
	<script src="<?php echo base_url();?>js/demo.js"></script>
	
	
</body>
</html>
