<div class="clearfix">&nbsp;</div>
<div class="row">

<div class="col-lg-9">
<div class="panel panel-primary">
 <div class="panel-heading">My teams</div>
  <div class="panel-body">    
<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th class="col-lg-3">Departement</th>
        <th class="col-lg-3">Team name</th>
        <th class="col-lg-2">Team coach</th>
        <th class="col-lg-1"></th>
    </tr>
    </thead>

    <tbody>
<?php foreach ($teams as $team_item): ?>    
    <tr>
        <td><?php echo $team_item["departmentname"]; ?></td>
        <td><?php echo $team_item["teams_name"]; ?></td>
        <td><?php echo $team_item["first_name"]." ". $team_item["last_name"];?></td>
        <td>
        <div class="btn-group">
         <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
         <ul class="dropdown-menu" role="menu">
           <li><a href="/"><i class="fa fa-user"></i> Add agent</a></li>
           <li><a href="/"><i class="fa fa-pencil"></i> Change settings</a></li>
           <div class="divider"></div>
           <li><a href="<?php echo base_url('#');?>" data-confirm="Do you really want to remove this team?"><i class="fa fa-times"></i> Remove team</a></li>
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
 <div class="panel-heading">Team menu</div>
  <div class="panel-body">    
 <ul class="list">
   <li><a href="#" data-toggle="modal" data-target="#create">Create team</a></li> 
   <li><a href="<?php echo base_url("index.php/teams/index");?>">list teams</a></li> 
 </ul>
</div>
</div>
</div>



<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Create team</h4>
      </div>
      <div class="modal-body">
        <form action="" method="post" class="form-horizontal">
  <div class="form-group">
        <label for="department_name" class="col-sm-3 control-label">Department</label>
        <div class="col-md-6">            
     <select name="department_name" id="department_name" class="form-control">
    <?php foreach ($department as $item): ?>
      <option value="<?php echo $item['id'];?>"><?php echo $item['name'];?></option>
      <?php endforeach ?>    
     </select>

      </div>
  </div>         
        
                        <div class="form-group">
                           <label for="team_name" class="form-label col-md-3"> Name</label>
                                <div class="col-lg-6">                            
                            <input type="text" class="form-control" name="team_name" id="team_name" required="required" />
                        </div>
                        </div>

                        <div class="form-group">
                           <label for="team_coach" class="form-label col-md-3">Team coach</label>
                                <div class="col-lg-6">                            
                           <select name="team_coach" required="required" class="form-control"/>
                             <?php foreach ($users as $user):?>
                             <option value="<?php echo $user->id;?>"><?php echo $user->first_name;?> <?php echo $user->last_name;?> </option>
 	                           <?php endforeach;?>
                           </select>

                        </div>
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
