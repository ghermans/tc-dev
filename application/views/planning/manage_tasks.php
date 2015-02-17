<div class="page-header">
<h3><span class="fa fa-clock-o"></span> <?php echo lang('task_heading');?></h3>
</div>

<div class="clearfix">&nbsp;</div>

<p><button type="button" class="btn btn-success" data-toggle="modal" data-target="#addshift">Add task</button> </p>
<?php if(!empty($message)) { ?>
<div class="row">
<div class="col-md-12">
<div class="alert alert-info">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<p><?php echo $message;?></p></div>
</div>
</div>
<?php } ?>	
<div class="clearfix">&nbsp;</div>
<div class="row">
<div class="col-md-12">
<table class="table table-bordered table-striped table-responsive">
<thead>
<tr>
  <th><?php echo lang('task_code');?></th>
  <th class="text-center"><?php echo lang('task_start');?></th>
  <th class="text-center"><?php echo lang('task_stop');?></th>
  <th class="col-md-1 text-center">&nbsp;</th>
 </tr>
</thead>
<tbody>
    <?php foreach ($task as $task_item):?>
<tr>
  <td><?php echo $task_item['shift_code'];?></td>
  <td class="text-center"><?php echo $task_item['shift_start'];?></td>
  <td class="text-center"><?php echo $task_item['shift_end'];?></td>
  <td class="text-center"><a href="<?php echo base_url("planning/edit_task/".$task_item['shift_id']."");?>"><i class="fa fa-pencil"></i></a> <a href="<?php echo base_url("planning/remove_task/".$task_item['shift_id']."");?>"><i class="glyphicon glyphicon-remove"></i></a></td>
  </tr>
  <?php endforeach ?> 
</tbody>

</table>

</div>

<div class="modal fade" id="addshift" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="glyphicon glyphicon-remove"></i></span></button>
        <h4 class="modal-title" id="myModalLabel">Add shift</h4>
      </div>
        <?php echo form_open('', 'class="form-horizontal"');?>
      <div class="modal-body">

					<div class="form-group">
						<label for="shift_code" class="col-sm-3 control-label"><?php echo lang('task_code');?></label>
						
						<div class="col-md-6">
							<input type="text" name="shift_code" class="form-control" value="" id="shift_code">
						</div>
					</div>

	            <hr>
					
					<div class="form-group">
						<label for="shift_start" class="col-sm-3 control-label"><?php echo lang('task_start');?></label>
						
						<div class="col-md-6">
                  <input type="text" name="task_cstart" id="time" class="form-control"> </div>
						</div>

					
					<div class="form-group">
						<label for="shift_stop" class="col-sm-3 control-label"><?php echo lang('task_stop');?></label>
						<div class="col-md-6">
							<input type="text" name="task_cstop" id="shift_stop" class="form-control"> </div>
						</div>
					
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo lang('task_cancel');?></button>
        <button type="submit" class="btn btn-primary"><?php echo lang('task_submit');?></button>
      </div>
      <?php echo form_close();?>

  </div>
</div>
</div>