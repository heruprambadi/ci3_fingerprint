<?php if ($message) { ?>
<div class="callout callout-danger lead" id="infoMessage">
  <h4>Warning !</h4>
  <p><?php echo $message;?></p>
</div>
<?php } ?>

<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title"><h1><?php echo lang('create_user_subheading');?></h1></h3>
  <div class="box-tools pull-right">
    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    <!--<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>-->
  </div>
</div><!-- /.box-header -->
<div class="box-body">
  <?php echo form_open("auth/create_user", "role='form'");?>
  <div class="form-group">
    <label for="exampleInputEmail1"><?php echo lang('create_user_fname_label', 'first_name');?></label>
    <?php echo form_input($first_name, '', 'class="form-control"');?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><?php echo lang('create_user_lname_label', 'last_name');?></label>
    <?php echo form_input($last_name, '', 'class="form-control"');?>
  </div>
  <div class="form-group">
    <?php if($identity_column!=='email') { ?>
    <label for="exampleInputPassword1"><?php echo lang('create_user_identity_label', 'identity');;?></label>
    <?php echo form_error('identity'); echo form_input($identity);?>
    <?php } ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><?php echo lang('create_user_company_label', 'company');?></label>
    <?php echo form_input($company, '', 'class="form-control"');?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><?php echo lang('create_user_email_label', 'email');?></label>
    <?php echo form_input($email, '', 'class="form-control"');?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><?php echo lang('create_user_phone_label', 'phone');?></label>
    <?php echo form_input($phone, '', 'class="form-control"');?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><?php echo lang('create_user_password_label', 'password');?></label>
    <?php echo form_input($password, '', 'class="form-control"');?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><?php echo lang('create_user_password_confirm_label', 'password_confirm');?></label>
    <?php echo form_input($password_confirm, '', 'class="form-control"');?>
  </div>
  <div class="box-footer">
    <?php echo form_submit('submit', lang('create_user_submit_btn'), 'class="btn btn-primary');?>
  </div>
  <?php echo form_close(); ?><!-- /.box -->
</div><!-- /.box-body -->

<div class="box-footer">
</div>