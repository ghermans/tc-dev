<div class="page_header">
 <h3>User Access Roles</h3>
</div>
  <hr/>
 <div class="col-lg-8"> 
 <div class="clearfix">&nbsp;</div>
  <table class="table table-bordered table-responsive table-hover"> 
    <thead>
     <tr>
       <th>Role</th>   
       <th>Total users</th> 
       <th>Description</th> 
       <th class="col-lg-1"></th>                
     </tr>    
    </thead>
    <tbody>
    <?php foreach ($groups as $group):?>
     <tr>
       <td><?php echo $group->name;?> </td>
       <td><a href="#">14</a></td>     
       <td><?php echo $group->description;?></td>    
       <td><div class="btn-group">
       <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
       Action <span class="caret"></span>
      </button> 
     <ul class="dropdown-menu" role="menu">
      <li><a href="<?php echo base_url("index.php/auth/edit_group/"); ?>/<?php echo $group->id ?>/"><i class="fa fa-pencil"></i> Change</a></li>
      <li class="divider"></li>
      <li><a href="#" class="confirm"><i class="fa fa-times"></i> Delete </a></li>
     </ul>
   </div> 
     </td>                           
     </tr> 
   <?php endforeach;?>        
    </tbody>
  </table>
</div>  

 <div class="col-lg-4"> 
  <div class="panel panel-primary">
 <div class="panel-heading">Role menu</div>
  <div class="panel-body">    
 <ul class="list">
   <li><a href="http://dev.timecontrol.be/index.php/auth/create_group">Create new role</a></li> 
   <li><a href="http://dev.timecontrol.be/index.php/auth/roles">list roles</a></li> 
 </ul>
</div>
</div>
 
 </div>