		<div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <p align="right"><?php echo anchor('auth/create_user', '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> User', array('class' => 'btn btn-primary'))?> <?php echo anchor('auth/create_group', '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Group', array('class' => 'btn btn-primary'))?></p>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tbody><tr>
                      <th><?php echo lang('index_fname_th');?></th>
                      <th><?php echo lang('index_lname_th');?></th>
                      <th><?php echo lang('index_email_th');?></th>
                      <th><?php echo lang('index_groups_th');?></th>
                      <th><?php echo lang('index_status_th');?></th>
                      <th><?php echo lang('index_action_th');?></th>
                    </tr>
                    <?php foreach ($users as $user):?>
					<tr>
			            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
			            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
			            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
						<td>
							<?php foreach ($user->groups as $group):?>
								<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
			                <?php endforeach?>
						</td>
						<td><?php echo ($user->active) ?
                '<a href="#myModal" class="trash" data-id="'.$user->id.'" role="button" data-toggle="modal">'.lang('index_active_link').'</a>'
                :
                anchor("auth/activate/". $user->id, lang('index_inactive_link'), 'data-toggle="modal" data-target="#myModal"');?></td>
						<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
					</tr>
				<?php endforeach;?>
                  </tbody></table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">»</a></li>
                  </ul>
                </div>
              </div><!-- /.box -->
            </div>
          </div>







<div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                 <h3 id="myModalLabel">Delete Confirmation</h3>

            </div>
            <div class="modal-body">
                <p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete the cover?
                    <br>This cannot be undone.</p>
            </div>
            <div class="modal-footer">
               <button class="btn btn-default"data-dismiss="modal" aria-hidden="true">Cancel</button> <a href="#" class="btn btn-danger"  id="modalDelete" >Delete</a>

            </div>
        </div>
    </div>
</div>

<script>
 $('.trash').click(function(){
    var id=$(this).data('id');
    $('#modalDelete').attr('href','delete-cover.php?id='+id);
  })

     /*    $('#myModal').on('shown.bs.modal', function () {
  $('#modalAD').focus();
})*/
</script>