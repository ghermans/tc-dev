<h1><?php echo lang('create_group_heading');?></h1>
<p><?php echo lang('create_group_subheading');?></p>
<p><?php echo anchor('auth/create_user', lang('index_create_user_link'), 'class="btn btn-default"')?>  <?php echo anchor('auth/create_group', lang('index_create_group_link'), 'class="btn btn-default"')?> <?php echo anchor('auth/create_permission', lang('index_create_permission_link'), 'class="btn btn-default"')?></p>
<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_group");?>

      <p>
            <?php echo lang('create_group_name_label', 'group_name');?> <br />
            <?php echo form_input($group_name);?>
      </p>

      <p>
            <?php echo lang('create_group_desc_label', 'description');?> <br />
            <?php echo form_input($description);?>
      </p>

      <p><?php echo form_submit('submit', lang('create_group_submit_btn'));?></p>

<?php echo form_close();?>