<h1><?php echo lang('edit_group_heading');?></h1>
<p><?php echo lang('edit_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(current_url());?>

     <div class="form-group">
            <label class="form-label"><?php echo lang('edit_group_name_label');?></label> 
            <?php echo form_input($group_name);?>
      </div>

     <div class="form-group">
           <label class="form-label"> <?php echo lang('edit_group_desc_label');?></label> 
            <?php echo form_textarea($group_description);?>
      </div>

      <?php if ($this->ion_auth->has_permission('edit_group_permissions')): ?>

          <h3><?php echo lang('edit_groups_permissions_heading');?></h3>
            <div class="checkbox">

          <?php foreach ($permissions as $permission):?>
              <label class="checkbox">
              <?php
                  $pID=$permission['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentPermissions as $per) {
                      if ($pID == $per->id) {
                          $checked= ' checked="checked"';
                      break;
                      }
                  }
              ?>
              <input type="checkbox" name="permissions[]" value="<?php echo $permission['id'];?>"<?php echo $checked;?>>
              <?php echo $permission['description'];?>
              </label>
          <?php endforeach?>
</div>
      <?php endif ?>

      <p><?php echo form_submit('submit', lang('edit_group_submit_btn'));?></p>

<?php echo form_close();?>