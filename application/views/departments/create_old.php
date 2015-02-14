<?php echo "<div class=\"page-header\"><h3>Create department</h3></div>"; ?>
<div class="col-lg-9 col-offset-2">

<?php
$attributes = array('class' => 'form-horizontal', 'id' => 'create_departments');
echo form_open('departments/create', $attributes);
$form_label = array(
    'class' => 'col-sm-2 control-label'
);

$select = 'class="form-control"';

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

echo "<hr>";


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
	   <div class="form-group">
        <label for="mailbox" class="col-sm-2 control-label">Use breaktool</label>
		 <div class="col-sm-5">
          <input type="checkbox" name="config-break" data-on-color="success" data-off-color="danger" data-on-text="Yes" data-off-text="NO"  class="form-control " >
         </div>
		</div>
		<?php
echo "<div class=\"form-group\">";
echo form_label('&nbsp;', '', $form_label);
echo "<div class=\"col-lg-4\">";
echo form_submit('submit', 'Create department', 'class="btn btn-sm btn-primary"');  
echo "</div>";
echo "</div>";

echo form_close();

?>
</div>

<div class="col-lg-3">
<div class="panel panel-primary">
 <div class="panel-heading">Department menu</div>
  <div class="panel-body">    
 <ul class="list-group">
   <li class="list-group-item"><a href="<?php echo base_url("departments/create");?>"><i class="fa fa-plus"></i> Create department</a></li> 
   <li class="list-group-item"><a href="<?php echo base_url("departments/index");?>"><i class="fa fa-table"></i> list departments</a></li> 
 </ul>
</div>
</div>
</div>
