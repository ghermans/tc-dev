<div class="page-header"><h3>Edit shift</h3></div>
<?php echo form_open('', 'class="form-horizontal"');?>
					<div class="form-group">
						<label for="shift_code" class="col-sm-3 control-label"><?php echo lang('shifts_code');?></label>
						
						<div class="col-md-4">
							<input type="text" name="shift_code" class="form-control" value="<?php echo $shift['shift_code'];?>" id="shift_code">
						</div>
					</div>

	            <hr>
					
					<div class="form-group">
						<label for="shift_start" class="col-sm-3 control-label"><?php echo lang('shifts_start');?></label>
						
						<div class="col-md-4">
                  <input type="text" name="shift_start" id="time" value="<?php echo $shift['shift_start'];?>" class="form-control"> </div>
						</div>

					
					<div class="form-group">
						<label for="shift_stop" class="col-sm-3 control-label"><?php echo lang('shifts_stop');?></label>
						<div class="col-md-4">
							<input type="text" name="shift_stop" id="shift_stop" value="<?php echo $shift['shift_end'];?>" class="form-control"> </div>
						</div>
						
					<div class="form-group">
					<label for="shift_start" class="col-sm-3 control-label"></label>
					<div class="col-md-4">
        <button type="submit" class="btn btn-primary"><?php echo lang('shifts_submit');?></button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo lang('shifts_cancel');?></button>
      </div>
      </div>
      
      </div>
      <?php echo form_close();?>