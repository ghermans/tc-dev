<div class="page-header">
 <h3>Mail templates</h3>

</div>
<div class="row col-md-9 col-md-offset-1 custyle">
<button class="btn btn-primary pull-right" data-toggle="modal" data-target="#add">
  Create a new template
</button>

<!-- Modal -->
<div class="modal" id="add" tabindex="-1" role="dialog" aria-labelledby="addtemplate" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="addtemplate">Create a new template</h4>
      </div>
      <div class="modal-body">

<?php
	$attributes = array('class' => 'form-horizontal', 'id' => 'addtemplate');
	$css = 'class="form-control"';
   echo form_open('', $attributes);
?>

<div class="form-group">
<label for="email" class="col-sm-3 control-label">Template name</label>
<div class="col-md-7">            
  <?php echo form_input('template_name', '', $css); ?>
</div>
</div>

<div class="form-group">
<label for="email" class="col-sm-3 control-label">Template location</label>
<div class="col-md-7">            
  <?php echo form_input('template_location', '/dev.timecontrol.be/application/views/templates/', $css); ?>
</div>
</div>

<div class="form-group">
<label for="email" class="col-sm-3 control-label">Description</label>
<div class="col-md-7">            
  <?php echo form_textarea('template_description', '', $css); ?>
</div>
</div>


</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      <?php
echo form_close();
?>
    </div>
  </div>
</div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
    
    <table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Title</th>
            <th class="col-md-2">&nbsp;</th>
        </tr>
    </thead>
 <?php foreach ($template as $template_item): ?>    
            <tr>
                <td><?php echo $template_item['name'] ?></td>
                <td class="text-center">
                <a class='btn btn-sm btn-default' href="<?php echo base_url('settings/edittemplate');?>/<?php echo $template_item['id']?>"><span class="fa fa-pencil"></span> Edit</a>
                <a href="<?php echo base_url('settings/edittemplate');?>/<?php echo $template_item['id']?>" class="btn btn-sm btn-danger" id="Confirm"><span class="fa fa-times"></span> Remove</a></td>
            </tr>
   <?php endforeach ?>            
            
    </table>
    </div>
