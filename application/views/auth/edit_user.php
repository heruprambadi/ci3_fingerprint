<?php if ($message) { ?>
<div class="callout callout-danger lead" id="infoMessage">
  <h4>Warning !</h4>
  <p><?php echo $message;?></p>
</div>
<?php } ?>

<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title"><h1><?php echo lang('edit_user_subheading');?></h1></h3>
  <div class="box-tools pull-right">
    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    <!--<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>-->
  </div>
</div><!-- /.box-header -->
<div class="box-body">
  <?php echo form_open(uri_string());?>
  <div class="form-group">
    <label><?php echo lang('edit_user_fname_label', 'first_name');?></label>
    <?php echo form_input($first_name, '', 'class="form-control"');?>
  </div>
  <div class="form-group">
    <label><?php echo lang('edit_user_lname_label', 'last_name');?></label>
    <?php echo form_input($last_name, '', 'class="form-control"');?>
  </div>
  <div class="form-group">
    <label><?php echo lang('edit_user_company_label', 'company');?></label>
    <?php echo form_input($company, '', 'class="form-control"');?>
  </div>
  <div class="form-group">
    <label><?php echo lang('edit_user_phone_label', 'phone');?></label>
    <?php echo form_input($phone, '', 'class="form-control"');?>
  </div>
  <div class="form-group">
    <label><?php echo lang('edit_user_password_label', 'password');?></label>
    <?php echo form_input($password, '', 'class="form-control"');?>
  </div>
  <div class="form-group">
    <label><?php echo lang('edit_user_password_confirm_label', 'password_confirm');?></label>
    <?php echo form_input($password_confirm, '', 'class="form-control"');?>
  </div>
  <div class="form-group">
    <label><?php echo lang('edit_user_password_confirm_label', 'password_confirm');?></label>
    <?php echo form_input($password_confirm, '', 'class="form-control"');?>
  </div>
  <div class="form-group">
    <?php if ($this->ion_auth->is_admin()): ?>
        <label><?php echo lang('edit_user_groups_heading');?></label>
          <?php foreach ($groups as $group):?>
            <div class="checkbox icheck">
              <label class="checkbox">
              <?php
                $gID=$group['id'];
                $checked = null;
                $item = null;
                  foreach($currentGroups as $grp) {
                    if ($gID == $grp->id) {
                      $checked= ' checked="checked"';
                    break;
                  }
                }
              ?>
              <?php echo form_checkbox('groups[]', $group['id'], $checked, 'id="groups"');?>
        <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
        </label>
        </div>
  </div>
      <?php endforeach?>
    <?php endif ?>
    <?php echo form_hidden('id', $user->id);?>
    <?php echo form_hidden($csrf); ?>

  <div class="box-footer">
    <?php echo form_submit('submit', lang('edit_user_submit_btn'), 'class = "btn btn-primary"');?>
  <?php echo form_close();?>
  </div>
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