<h1><?php echo lang('create_permission_heading');?></h1>
<p><?php echo lang('create_permission_subheading');?></p>
<p><?php echo anchor('auth/create_user', lang('index_create_user_link'), 'class="btn btn-default"')?>  <?php echo anchor('auth/create_group', lang('index_create_group_link'), 'class="btn btn-default"')?> <?php echo anchor('auth/create_permission', lang('index_create_permission_link'), 'class="btn btn-default"')?></p>
<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_permission", 'class="form-horizontal"');?>

      <div class="form-group">
            <label class="form-label col-md-2"><?php echo lang('create_permission_name_label', 'permission_name');?> </label>
           <div class="col-md-6"> <?php echo form_input($permission_name);?></div>
      </div>
      
      <div class="form-group">
           <label class="form-label col-md-2"> <?php echo lang('create_permission_desc_label', 'description');?> </label>
           <div class="col-md-6">  <?php echo form_textarea($description);?></div>
      </div>
      
      <div class="form-group">
      <label class="form-label col-md-2">&nbsp;</label>      
      <div class="col-md-6"><?php echo form_submit('submit', lang('create_permission_submit_btn'), 'class="btn btn-primary"');?></div>

<?php echo form_close();?>