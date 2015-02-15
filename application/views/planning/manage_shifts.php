<div class="page-header">
<h3><span class="fa fa-clock-o"></span> Manage shifts</h3>
</div>

<p><button type="button" class="btn btn-success" data-toggle="modal" data-target="#addshift">Add shift</button> </p>
<div class="row">
<div class="col-md-12">
<table class="table table-bordered table-striped table-responsive">
<thead>
<tr>
  <th>Shift code</th>
  <th class="text-center">Start</th>
  <th class="text-center">Stop</th>
  <th class="col-md-1 text-center">&nbsp;</th>
 </tr>
</thead>
<tbody>
    <?php foreach ($shift as $shift_item):?>
<tr>
  <td><?php echo $shift_item['shift_code'];?></td>
  <td class="text-center"><?php echo $shift_item['shift_start'];?></td>
  <td class="text-center"><?php echo $shift_item['shift_end'];?></td>
  <td class="text-center"><a href=""><i class="fa fa-pencil"></i></a> <a href=""><i class="glyphicon glyphicon-remove"></i></a></td>
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
						<label for="shift_code" class="col-sm-3 control-label">Code</label>
						
						<div class="col-md-6">
							<input type="text" name="shift_code" class="form-control" value="" id="shift_code">
						</div>
					</div>

	            <hr>
					
					<div class="form-group">
						<label for="shift_start" class="col-sm-3 control-label">Start time</label>
						
						<div class="col-md-6">
                  <input type="text" name="shift_start" id="time" class="form-control"> </div>
						</div>

					
					<div class="form-group">
						<label for="shift_stop" class="col-sm-3 control-label">End time</label>
						<div class="col-md-6">
							<input type="text" name="shift_stop" id="shift_stop" class="form-control"> </div>
						</div>
					
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      <?php echo form_close();?>

  </div>
</div>
</div>