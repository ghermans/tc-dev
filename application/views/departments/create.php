<?php
$select = 'class="form-control"';
$attributes = array('class' => 'form-horizontal', 'id' => 'SignupForm', 'role' => 'form');

$form_label = array(
    'class' => 'col-sm-2 control-label'
);
$department = array(
              'name'        => 'department_name',
              'id'          => 'department_name',
              'class'       => 'form-control'
            );

$department_mailbox = array(
              'name'        => 'department_mail',
              'id'          => 'department_mail',
              'class'       => 'form-control'
            );
echo form_open('departments/create', $attributes);              
?>
        <fieldset>
            <legend style="">General information</legend>
<?php
echo "<div class=\"form-group\">";
echo form_label('Department name', 'department_name', $form_label);
echo "<div class=\"col-lg-4\">";
echo form_input($department);
echo "</div>";
echo "</div>";

echo "<div class=\"form-group\">";
echo form_label('Department email address', 'department_mail', $form_label);
echo "<div class=\"col-lg-4\">";
?>
 <div class="input-group">
      <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
<?php
echo form_input($department_mailbox);
echo "</div>";
echo "</div>";
echo "</div>";


echo "<div class=\"form-group\">";
echo form_label('Manager', 'department_manager', $form_label);
echo "<div class=\"col-lg-4\">";

echo "<select name=\"department_manager\" class=\"form-control\">";
?>
<option value="" selected="selected"></option>
<?php
foreach ($options as $manager):
?>
    <option value="<?php echo $manager['id'];?>"><?php echo $manager['first_name'];?> <?php echo $manager['last_name'];?></option>
          <?php endforeach; ?>
    </select>      
<?php          
echo "</div>";
echo "</div>";
?>
        </fieldset>
        
        <fieldset>
            <legend>Component settings</legend>
            <div class="form-group">
        <label for="mailbox" class="col-sm-3 control-label">Use breaktool</label>
		 <div class="col-sm-5">
          <input type="checkbox" name="config-break" data-on-color="success" data-off-color="danger" data-on-text="Yes" data-off-text="NO"  class="form-control " >
         </div>
		</div>
	   <div class="form-group">
        <label for="mailbox" class="col-sm-3 control-label">Enable lunch management</label>
		 <div class="col-sm-5">
          <input type="checkbox" name="config-lunch" data-on-color="success" data-off-color="danger" data-on-text="Yes" data-off-text="NO"  class="form-control">
         </div>
		</div>
        </fieldset>

            <button id="SaveAccount" type="submit" class="btn btn-primary pull-right" style='margin-top:-40px;'/><i class="fa fa-check"></i> Create department</button>
        </form>