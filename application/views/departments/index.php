<div class="page-header">
<h3>Departments</h3>
</div>

<div class="clearfix">&nbsp;</div>
<div class="row">

<div class="col-lg-9">
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

<div class="col-lg-3">
<div class="panel panel-primary">
 <div class="panel-heading">Department menu</div>
  <div class="panel-body">    
 <ul class="list-group">
   <li class="list-group-item"><a href="<?php echo base_url("index.php/departments/create");?>"><i class="fa fa-plus"></i> Create department</a></li> 
   <li class="list-group-item"><a href="<?php echo base_url("index.php/departments/index");?>"><i class="fa fa-table"></i> list departments</a></li> 
 </ul>
</div>
</div>
</div>



<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Create department</h4>
      </div>
      <div class="modal-body">
        <form action="" method="post" class="form-horizontal">
        
         <div class="form-group">
          <label for="name" class="form-label col-md-3"> Name</label>
            <div class="col-lg-6">                            
             <input type="text" class="form-control input-sm" name="name" id="name" required="required" />
            </div>
              </div>

             <div class="form-group">
              <label for="name" class="form-label col-md-3">Manager</label>
                <div class="col-lg-6">                            
                   <select name="manager" required="required" class="form-control input-sm"/>
                   <option value="" selected="selected"></option>
                     	<?php foreach ($logins as $login):?>
                <option value="<?php echo $login->id;?>"><?php echo $login->first_name;?> <?php echo $login->last_name;?></option>
                       <?php endforeach;?>
                           </select>

                        </div>
                        </div>

       <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
      </div>
 </form>	
      </div>
      
    </div>
  </div>
</div>

</div>
