<div class="panel panel-primary">
 <div class="panel-heading"><?php echo lang('change_password_heading');?></div>
  <div class="panel-body">    
  
  <div id="infoMessage"><?php echo $message;?></div>

  <form id="changepass" action="" method="post" class="form-horizontal"
    data-bv-message="This value is not valid"
    data-bv-feedbackicons-valid="fa fa-ok"
    data-bv-feedbackicons-invalid="fa fa-times"
    data-bv-feedbackicons-validating="fa fa-refresh">  

  <div class="form-group">
    <label for="old_password" class="col-sm-3 control-label"><?php echo lang('change_password_old_password_label', 'old_password');?> </label>
        <div class="col-md-4">         
       <input type="password" id="old_password" name="old_password" class="form-control input-sm"
        data-bv-notempty="true"
        data-bv-notempty-message="The old password is required and cannot be empty">
      </div>
   </div>
   
  <div class="form-group">
            <label for="new_password" class="col-sm-3 control-label"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label>
        <div class="col-md-4">            
            <input type="password" id="new_password" name="new_password" class="form-control input-sm"
             data-bv-notempty="true"
             data-bv-notempty-message="The new password is required and cannot be empty">
      </div>
  </div>
  
  <div class="form-group">
     <label for="new_password_confirm" class="col-sm-3 control-label"><?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> </label>
        <div class="col-md-4">  
         <input type="password" id="new_password_confirm" name="new_password_confirm" class="form-control input-sm"
             data-bv-notempty="true"
             data-bv-notempty-message="Password confirmation is required and cannot be empty">         
      </div>
  </div>

  <div class="form-group">
  <label for="new_password_confirm" class="col-sm-3 control-label">&nbsp;</label>  
    <div class="col-md-4"> 
      <?php echo form_input($user_id);?>
      <button class="btn btn-sm btn-primary"><?php echo lang('change_password_submit_btn');?></button>
     </div>
</div>

<?php echo form_close();?>
</div>
</div>