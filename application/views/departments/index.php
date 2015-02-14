<div class="page-header">
<h3>Departments</h3>
</div>
<p><?php echo anchor('departments/create', lang('index_create_user_link'), 'class="btn btn-default"')?> </p>
<div class="clearfix">&nbsp;</div>
<div class="row">

<div class="col-md-12">
<div class="panel panel-primary">
 <div class="panel-heading">Departments</div>
  <div class="panel-body">    
<table class="table table-striped">
    <thead>
    <tr>
        <th class="col-lg-3">Departement</th>
        <th class="col-lg-3">Manager</th>
        <th class="col-lg-2">Teams</th>
        <th class="col-lg-1">&nbsp;</th>
    </tr>
    </thead>

    <tbody>
    <?php foreach ($department as $department_item): ?>
    <tr>
     <td><?php echo $department_item['department_name'] ?></td>
     <td><?php echo $department_item['first_name']; ?> <?php echo $department_item['last_name']; ?></td>
     <td class="text-center">2</td>
     <td>
      <div class="btn-group">
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu">
       <li><a href="<?php echo base_url('departments/contacts');?>/<?php echo $department_item['departmentID'] ?>">Add contact</a></li>
       <li><a href="<?php echo base_url('departments/change');?>/<?php echo $department_item['departmentID'] ?>">Change default settings</a></li>
       <li class="divider"></li>
       <li><a href="<?php echo base_url('departments/delete_department');?>/<?php echo $department_item['departmentID'] ?>" data-confirm="Do you really want to remove this department?"><i class="fa fa-times"></i> Remove department</a></li>
     </ul>
     </div>
   </td>
    </tr>
    <?php endforeach ?>
    </tbody>
</table>
 
 
</div>
</div>
</div>
</div>