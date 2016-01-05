<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Simpleton | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/bootstrap/css/bootstrap.min.css') ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/AdminLTE.min.css') ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/iCheck/square/blue.css') ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
  <!--<h1><?php echo lang('login_heading');?></h1>
  <p><?php echo lang('login_subheading');?></p>-->
  <div id="infoMessage"><?php echo $message;?></div>
    <div class="login-box">
      <div class="login-logo">
        <a href="http://heruprambadi.com" target="_blank"><b>Simpleton</b><br><h6>By : Heru Prambadi</h6></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in untuk memulai</p>
        <?php echo form_open("auth/login");?>
          <div class="form-group has-feedback">
            <?php echo form_input($identity, '', 'type="email" class="form-control" placeholder="Email"');?>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <?php echo form_input($password, '', 'type="password" class="form-control" placeholder="Password"');?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                  <?php echo 'Remember';?>
                  <!--<?php echo lang('login_remember_label', 'remember');?>-->
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-primary btn-block btn-flat"');?>
            </div><!-- /.col -->
          </div>
        <?php echo form_close();?>

        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div><!-- /.social-auth-links -->

        <a href="forgot_password"><?php echo lang('login_forgot_password');?></a><br>
        <a href="#" class="text-center">Mendaftar</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="<?= base_url('assets/adminlte/plugins/jQuery/jQuery-2.1.4.min.js') ?>"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?= base_url('assets/adminlte/bootstrap/js/bootstrap.min.js') ?>"></script>
    <!-- iCheck -->
    <script src="<?= base_url('assets/adminlte/plugins/iCheck/icheck.min.js') ?>"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
