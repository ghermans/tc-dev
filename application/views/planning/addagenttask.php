<div class="page-header">
<h3>Add tasks</h3>
</div>
<div class="row">
  <div class="col-sm-12">

<div class="well">

For the moment it is only possible to add one task at once

</div>

<?php echo validation_errors(); ?>  
  <?php echo form_open(''); ?>
	<table class="table table-bordered table-striped table-hover">
				<thead>
					<tr>
						<th class="text-center">
							#
						</th>
						<th class="text-center">
							Task name
						</th>
						<th class="text-center">
							Start
						</th>
						<th class="text-center">
							Stop
						</th>
					</tr>
				</thead>
				<tbody>
					<tr id='addr0'>
						<td>
						1
						</td>
						<td>
<select id="taskName"  name="taskName" class="form-control">
      <option selected="selected" value=""></option>
      <option value="Create your own question">Create your own task</option>
      <option value="-">----------------------</option>
      <option value="Coaching">Coaching</option>
      <option value="Inbound">Inbound</option>
      <option value="Lunch">Lunch</option>
      <option value="Medisch onderzoek">Medical exam</option>
      <option value="Team meeting">Team meeting</option>      
            
</select>
    <input type="text" id="newQuestion" class="form-control">
	</td>
				<td>
            <input name="taskStart" data-format="yyyy-MM-dd hh:mm:ss" id="datetimepicker1" type="text" class="form-control">
             </td>
						<td>
                   <div id="taskStop" class="input-append date">
                   <input type="text" name='taskStop' id="datetimepicker2" value="<?php echo set_value('taskStop'); ?>" data-format="yyyy-MM-dd hh:mm:ss" class="form-control">
                  </div>
						</td>
					</tr>
                    <tr id='addr1'></tr>
				</tbody>
			</table> 
			<p>	
			     <a id="add_row" class="btn btn-sm btn-default pull-left">Add Row</a>
			     <input type="submit" value="Submit" class="btn btn-sm btn-primary" >
			      <a id='delete_row' class="pull-right btn-sm btn btn-default">Delete Row</a></p>

			  </div>
			  </div>
			  
			  
			  <div class="row">


</div>
<script type="text/javascript">
  $(function() {
    $('#datetimepicker1').datetimepicker({format:'Y-m-d H:i'});
    $('#datetimepicker2').datetimepicker({format:'Y-m-d H:i'});    
  });
  $(function() {
    $('#newQuestion').hide();
    
    $('#taskName').change(function() {
        if ($(this).val() == 'Create your own question')
            $('#newQuestion').show();
        else
            $('#newQuestion').hide();
    });
});
</script>
