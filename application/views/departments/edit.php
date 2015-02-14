<div class="page-header">
<h3>Change department settings</h3>
</div>
<div class="clearfix">&nbsp;</div>

<ul class="nav nav-tabs">
  <li class="active"><a href="#general" data-toggle="tab">General settings</a></li>
  <li><a href="#notifications" data-toggle="tab">Notifications</a></li>
  <li><a href="#teams" data-toggle="tab">Users</a></li>

</ul>

<div class="tab-content">
		
        <div class="tab-pane fade in active" id="general">
        <form id="create" method="post" class="form-horizontal">
        <div class="form-group">
		<label for="department" class="col-sm-3 control-label">Department name</label>
		 <div class="col-sm-5">
		  <input type="text" class="form-control" value="<?php echo $department_item['department_name'];?> " id="department">
	  	</div>
		</div>
		
	   <div class="form-group">
        <label for="mailbox" class="col-sm-3 control-label">Mailbox</label>
		<div class="col-sm-5">
         <input type="text" name="mailbox" class="form-control"> 
		</div>
		</div>
		<hr>
	   <div class="form-group">
        <label for="breaktool" class="col-sm-3 control-label">Enable breaktool</label>
		 <div class="col-sm-5">
          <input type="checkbox" id="breaktool" name="config-break" data-on-color="success" data-off-color="danger" data-on-text="Yes" data-off-text="NO"  class="form-control">
         </div>
		</div>
		
	   <div class="form-group">
        <label for="mailbox" class="col-sm-3 control-label">Enable lunch management</label>
		 <div class="col-sm-5">
          <input type="checkbox" name="config-lunch" data-on-color="success" data-off-color="danger" data-on-text="Yes" data-off-text="NO"  class="form-control">
         </div>
		</div>
		
	   <div class="form-group">
        <label for="mailbox" class="col-sm-3 control-label">Enable vacation management</label>
		 <div class="col-sm-5">
          <input type="checkbox" name="config-vacation" data-on-color="success" data-off-color="danger" data-on-text="Yes" data-off-text="NO"  class="form-control">
         </div>
		</div>
		
	   <div class="form-group">
        <label for="mailbox" class="col-sm-3 control-label">Enable planning management</label>
		 <div class="col-sm-5">
          <input type="checkbox" name="config-planning" data-on-color="success" data-off-color="danger" data-on-text="Yes" data-off-text="NO"  class="form-control">
         </div>
		</div>
										
    <div class="clearfix">&nbsp;</div>
    <div class="clearfix">&nbsp;</div>   
    <div class="clearfix">&nbsp;</div>
     
     <div class="form-group">
        <label for="" class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-5">
       <?php echo form_submit('save', 'Save settings', 'class="btn btn-primary"'); ?>&nbsp; <?php echo form_reset('reset', 'Cancel', 'class="btn btn-danger"'); ?>
         
		</div>
		</div>
		
  <?php echo form_close(); ?>
		</div>
        
        <div class="tab-pane fade in" id="notifications">
         <form class="form-horizontal">
        <div class="form-group">
        <label for="mailbox" class="col-sm-3 control-label">Send notifications</label>
		 <div class="col-sm-5">
          <input type="checkbox" name="config-lunch" data-on-color="success" data-off-color="danger" data-on-text="Yes" data-off-text="NO"  class="form-control">
         </div>
		</div>
		</form>
        </div>
        
        <div class="tab-pane fade in" id="teams">
         <form class="form-horizontal">
         <div id="dual-list-box" class="form-group">
            <select id="some-name"></select>
        </div>
        </div>
          <?php echo form_close(); ?>                
       </div>        