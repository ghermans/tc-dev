<div class="page-header"><h3>Edit task</h3></div>
<?php echo form_open('', 'class="form-horizontal"');?>
					<div class="form-group">
						<label for="task_code" class="col-sm-3 control-label"><?php echo lang('task_types');?></label>
						<div class="col-md-4">
							<input type="text" name="task_type" class="form-control" value="<?php echo $task['task_type'];?>" id="task_code">
						</div>
					</div>
	            <hr>
					<div class="form-group">
						<label for="task_start" class="col-sm-3 control-label"><?php echo lang('task_start');?></label>
						<div class="col-md-4">
                  <input type="text" name="task_start" id="time" value="<?php echo $task['task_min'];?>" class="form-control"> </div>
						</div>
					<div class="form-group">
						<label for="task_stop" class="col-sm-3 control-label"><?php echo lang('task_stop');?></label>
						<div class="col-md-4">
						<input type="text" name="task_stop" id="task_stop" value="<?php echo $task['task_max'];?>" class="form-control"> </div>
						</div>
						
					<div class="form-group">
					<label for="task_start" class="col-sm-3 control-label"></label>
					<div class="col-md-4">
        <button type="submit" class="btn btn-primary"><?php echo lang('task_submit');?></button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo lang('task_cancel');?></button>
      </div>
      </div>
      
      </div>
      <?php echo form_close();?>