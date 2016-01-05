<?php if ($message) { ?>
<div class="callout callout-danger lead" id="infoMessage">
  <h4>Warning !</h4>
  <p><?php echo $message;?></p>
</div>
<?php } ?>

<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title"><h1><?php echo lang('change_password_heading');?></h1></h3>
  <div class="box-tools pull-right">
    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    <!--<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>-->
  </div>
</div><!-- /.box-header -->
<div class="box-body">
  <?php echo form_open("auth/change_password", "role='form'");?>
  <div class="form-group">
    <label><?php echo lang('change_password_old_password_label', 'old_password');?></label>
    <?php echo form_input($old_password, '', 'class="form-control"');?>
  </div>
  <div class="form-group">
    <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label>
    <?php echo form_input($new_password, '', 'class="form-control"');?>
  </div>
  <div class="form-group">
    <label><?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?></label>
    <?php echo form_input($new_password_confirm, '', 'class="form-control"');?>
  </div>
  <div class="box-footer">
    <?php echo form_input($user_id);?>
    <?php echo form_submit('submit', lang('change_password_submit_btn'), 'class="btn btn-primary');?>
  </div>
  <?php echo form_close(); ?><!-- /.box -->
</div><!-- /.box-body -->

<div class="box-footer">
</div>