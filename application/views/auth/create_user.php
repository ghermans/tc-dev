<h1><?php echo lang('create_user_heading');?></h1>
<div class="form-group"><?php echo lang('create_user_subheading');?></div>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_user" , 'class="form-horizontal');?>

      <div class="form-group">
          <label class="form-label col-md-2"> <?php echo lang('create_user_fname_label');?> </label>
          <div class="col-md-5">  <?php echo form_input($first_name);?></div>
      </div>

      <div class="form-group">
           <label class="form-label col-md-2"> <?php echo lang('create_user_lname_label');?></label> 
              <div class="col-md-5"> <?php echo form_input($last_name);?></div>
      </div>


      <div class="form-group">
           <label class="form-label col-md-2">  <?php echo lang('create_user_email_label');?></label>
           <div class="col-md-5">  <?php echo form_input($email);?></div>
      </div>
      
      <div class="form-group">
        <label class="form-label col-md-2"><?php echo lang('create_user_phone_label');?></label>
           <div class="col-md-5"> <?php echo form_input($phone);?> </div>
      </div>      

      <div class="form-group">
         <label class="form-label col-md-2"> <?php echo lang('create_user_password_label');?></label>
          <div class="col-md-5">   <?php echo form_input($password);?> </div>
      </div>

      <div class="form-group">
           <label class="form-label col-md-2">  <?php echo lang('create_user_password_confirm_label');?></label>
            <div class="col-md-5"> <?php echo form_input($password_confirm);?></div>
      </div>


      <div class="form-group"><?php echo form_submit('submit', lang('create_user_submit_btn'), 'class="btn btn-primary"');?></div>

<?php echo form_close();?>
