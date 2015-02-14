<div class="page-header">
<h3><span class="fa fa-user"></span> Account settings</h3>
</div>
<div class="row">
	<div class="col-sm-12">
	 <ul class="nav nav-tabs">
	  <li class="active"><a data-toggle="tab" href="#contactinfo">General</a></li>
	  <li><a data-toggle="tab" href="#passwd">Change password </a></li>
	 </ul>
		<div class="tab-content">
		<div id="contactinfo" class="tab-pane active">
<?php echo form_open('', 'class="form-horizontal"');
$attributes = array(
    'class' => 'col-sm-4 control-label',    
);
$options = array(
    'class' => 'col-sm-2 control-label',    
);
?>
<fieldset>
		<div class="row">
<div class="col-lg-6">
          <div class="form-group">
            <?php  echo form_label('First name', 'first_name', $attributes); ?>
            <div class="col-sm-8">
              <?php  echo form_input($first_name); ?>
            </div>
          </div>
          
          <div class="form-group">
            <?php  echo form_label('Last name', 'last_name', $attributes); ?>
            <div class="col-sm-8">
       <?php  echo form_input($last_name); ?>
            </div>
          </div>    
          
          <div class="form-group">
            <?php  echo form_label('Email address', 'email', $attributes); ?>
            <div class="col-sm-8">
       <?php  echo form_input($email); ?>
            </div>
          </div>  
          
                         
</div>
<div class="col-lg-6">

  <div class="form-group">
  <label class="col-sm-4 control-label">&nbsp;</label>
    <div class="input-group col-lg-7">
      <div class="input-group-addon"><i class="fa fa-phone" title="Agent phone"></i></div>
       <?php  echo form_input($phone); ?>
    </div>
  </div>
  
  <div class="form-group">
  <label class="col-sm-4 control-label">&nbsp;</label>
    <div class="input-group col-lg-7">
      <div class="input-group-addon"><i class="fa fa-mobile-phone" title="Agent mobile phone"></i></div>
       <?php  echo form_input($mobile); ?>
    </div>
  </div>
  

                     

</div>
</div>
<hr>

<div class="clearfix">&nbsp; </div>
<div class="row">
<div class="col-lg-12">
<div class="form-group">
            <?php  echo form_label('Address', 'address', $options); ?>
            <div class="col-sm-4">
       <?php  echo form_input($address); ?>
            </div>
          </div> 

<div class="form-group">
            <?php echo form_label('City', 'city', $options); ?>
            <div class="col-sm-4">
       <?php  echo form_input($city); ?>
            </div>
          </div>            

  <div class="form-group">
        <label for="country" class="col-sm-2 control-label">Country</label>
        <div class="col-md-4">            
       <div class="bfh-selectbox bfh-countries" name="country" data-country="BE" data-flags="true"></div>
      </div>
  </div>

  <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">&nbsp;</label>
            <div class="col-sm-8">
                <button type="submit" name="save" class="btn btn-primary"><i class="fa fa-check"></i> Save settings</button>
                <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i>  Cancel</button>
             </div>
  </div>
</div>
<div class="clearfix">&nbsp;</div>
</fieldset>
<?php echo form_close();?>       		 
		
		</div>
				
			<div id="passwd" class="tab-pane">

		<?php echo form_open('', 'class="form-horizontal"'); ?>
       <div class="form-group">
<?php 
$attributes = array(
    'class' => 'col-sm-2 control-label',    
);
echo form_label('Your current password', 'old_password', $attributes);
?>
            <div class="col-lg-5">
            <?php echo form_input($old_password);?>
            </div>
      </div>

 <div class="form-group">
 <?php echo  form_label('Your new password', 'old_password', $attributes);?>
 <div class="col-lg-5">
    <?php echo form_input($new_password);?>
  </div>
  </div>

       <div class="form-group">
            <?php echo  form_label('Confirm new password', 'new_password_confirm', $attributes);?>
       <div class="col-lg-5">
            <?php echo form_input($new_password_confirm);?>
      </div>
      </div>

  <div class="form-group">
      <?php echo form_input($user_id);?>
      <div class="col-sm-2">&nbsp;</div>
       <div class="col-lg-5">      
      <p><?php echo form_submit('submit', lang('change_password_submit_btn'), 'class="btn btn-primary"');?></p>

	</div>
</div>
<?php echo form_close();?>       		 
</div>
</div>
</div>
</div>