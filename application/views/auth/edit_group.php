<?php if ($message) { ?>
<div class="callout callout-danger lead" id="infoMessage">
  <h4>Warning !</h4>
  <p><?php echo $message;?></p>
</div>
<?php } ?>

<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title"><h1><?php echo lang('edit_group_subheading');?></h1></h3>
  <div class="box-tools pull-right">
    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    <!--<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>-->
  </div>
</div><!-- /.box-header -->
<div class="box-body">
  <?php echo form_open(current_url());?>
  <div class="form-group">
    <label><?php echo lang('edit_group_name_label', 'group_name');?></label>
    <?php echo form_input($group_name, '', 'class="form-control"');?>
  </div>
  <div class="form-group">
    <label><?php echo lang('edit_group_desc_label', 'description');?></label>
    <?php echo form_input($group_description, '', 'class="form-control"');?>
  </div>
  <div class="box-footer">
    <?php echo form_submit('submit', lang('edit_group_submit_btn'), 'class = "btn btn-primary"');?>
  <?php echo form_close();?>
  </div>